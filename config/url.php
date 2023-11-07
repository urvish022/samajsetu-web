<?php

if(env('APP_ENV') == 'local') {
    return [
        'achievement' => 'https://staging.samajsetu.com/assets/uploads/achievment_photo/',
        'business' => 'https://staging.samajsetu.com/assets/uploads/business_photo/',
        'career' => 'https://staging.samajsetu.com/assets/uploads/carrer_photo/',
        'event' => 'https://staging.samajsetu.com/assets/uploads/event_photo/',
        'gallery' => 'https://staging.samajsetu.com/assets/uploads/gallery_photo/',
        'matrimony' => 'https://staging.samajsetu.com/assets/uploads/matrimony_photo/',
        'memorial' => 'https://staging.samajsetu.com/assets/uploads/memorial_photo/',
        'news' => 'https://staging.samajsetu.com/assets/uploads/news_photo/',
        'organization' => 'https://staging.samajsetu.com/assets/uploads/organization_photo/',
        'slider' => 'https://staging.samajsetu.com/assets/uploads/slider_photo/',
        'user' => 'https://staging.samajsetu.com/assets/uploads/user_photo/',
        'village' => 'https://staging.samajsetu.com/assets/uploads/village_photo/',
    ];
} else {
    return [
        'achievement' => 'https://samajsetu.com/assets/uploads/achievment_photo/',
        'business' => 'https://samajsetu.com/assets/uploads/business_photo/',
        'career' => 'https://samajsetu.com/assets/uploads/carrer_photo/',
        'event' => 'https://samajsetu.com/assets/uploads/event_photo/',
        'gallery' => 'https://samajsetu.com/assets/uploads/gallery_photo/',
        'matrimony' => 'https://samajsetu.com/assets/uploads/matrimony_photo/',
        'memorial' => 'https://samajsetu.com/assets/uploads/memorial_photo/',
        'news' => 'https://samajsetu.com/assets/uploads/news_photo/',
        'organization' => 'https://samajsetu.com/assets/uploads/organization_photo/',
        'slider' => 'https://samajsetu.com/assets/uploads/slider_photo/',
        'user' => 'https://samajsetu.com/assets/uploads/user_photo/',
        'village' => 'https://samajsetu.com/assets/uploads/village_photo/',
    ];
}