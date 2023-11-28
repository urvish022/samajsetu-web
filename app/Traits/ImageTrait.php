<?php

namespace App\Traits;

use CURLFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

trait ImageTrait {

    function dirPath()
    {
        return [
            'app' => [
                'achievement' => 'achievment_photo',
                'business' => 'business_photo',
                'career' => 'carrer_photo',
                'event' => 'event_photo',
                'gallery' => 'gallery_photo',
                'matrimony' => 'matrimony_photo',
                'memorial' => 'memorial_photo',
                'news' => 'news_photo',
                'organization' => 'organization_photo',
                'slider' => 'slider_photo',
                'user' => 'user_photo',
                'village' => 'village_photo',
            ],
            'api' => [
                'achievement' => 'assets/uploads/achievment_photo/',
                'business' => 'assets/uploads/business_photo/',
                'career' => 'assets/uploads/carrer_photo/',
                'event' => 'assets/uploads/event_photo/',
                'gallery' => 'assets/uploads/gallery_photo/',
                'matrimony' => 'assets/uploads/matrimony_photo/',
                'memorial' => 'assets/uploads/memorial_photo/',
                'news' => 'assets/uploads/news_photo/',
                'organization' => 'assets/uploads/organization_photo/',
                'slider' => 'assets/uploads/slider_photo/',
                'user' => 'assets/uploads/user_photo',
                'village' => 'assets/uploads/village_photo/',
            ]
        ];
    }

    function createFolder($directoryToCheck)
    {
        if (!File::exists($directoryToCheck)) {
            // The directory doesn't exist, so let's create it
            File::makeDirectory($directoryToCheck, 0755, true, true);
        }
    }

    function base64ToImage($base64Image, $type)
    {
        $paths = $this->dirPath();
        $appPath = $paths['app'][$type];
        
        //check folder exists or not
        $this->createFolder(storage_path($appPath));

        // Decode base64 to image
        list($type, $data) = explode(';', $base64Image);
        list(, $data) = explode(',', $data);
        $imageData = base64_decode($data);

        $compressedImage = Image::make($imageData)->encode('png',20)->stream();

        // Save the image locally (you may want to generate a unique filename)
        $fileName = time().'.png';
        $file = $appPath."/".$fileName;
        Storage::disk('public')->put($file, $compressedImage);

        return $fileName;
    }

    public function uploadUsingCurl($targetUrl, $fileName, $type)
    {
        $paths = $this->dirPath();
        $apiPath = $paths['api'][$type];
        $appPath = $paths['app'][$type];

        $file = $appPath."/".$fileName;

        //curl
        $ch = curl_init();

        // Specify cURL options
        curl_setopt($ch, CURLOPT_URL, $targetUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: multipart/form-data',
        ]);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ['photo' => new CURLFile(public_path('storage/'.$file)),'path' => $apiPath,'file_name' => $fileName]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute cURL session
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        // Close cURL session
        curl_close($ch);
    }
}