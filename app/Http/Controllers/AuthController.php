<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Jobs\UploadImageQueueJob;
use App\Models\MemberDetail;
use App\Models\User;
use App\Models\VillageSetting;
use App\Traits\ImageTrait;
use App\Traits\UtilTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    use UtilTrait, ImageTrait;

    public function index()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }

        return view('auth.login');
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false, 'message' => trans('auth.failed')]);
        }
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }
        
        $villages = VillageSetting::get();

        return view('auth.register',compact('villages'));
    }

    public function register_ajax(RegisterRequest $request)
    {
        try{
            $input = $request->all();
            $result = $this->translate_text($request->full_name_eng);
            $input['full_name_guj'] = isset($result['responseData']['translatedText']) ? $result['responseData']['translatedText'] : "";
            unset($input['photo']);

            $currentDate = Carbon::now();

            $toDate = Carbon::parse($request->birth_date);

            $yearsInDifference = $currentDate->diffInYears($toDate);
            if($yearsInDifference < 25){
                return response()->json(['status'=>false,'message'=>'Your mininmum age should 25 years. Please register for main member of your email!']);
            }

            $emailMember = MemberDetail::where('email_id',$request->email_id)->count();
            $mobileMember = MemberDetail::where('mobile_no',$request->mobile_no)->count();
            if($mobileMember){
                return response()->json(['status'=>false,'message'=>'Entered mobile number already exists!']);
            }

            if($emailMember){
                return response()->json(['status'=>false,'message'=>'Entered email address already exists!']);
            }

            $uploadAPIURL = env('UPLOAD_IMAGE_API_URL');
            $input['photo'] = $this->base64ToImage($request->crop_photo,'user');
            
            //upload image to api server
            UploadImageQueueJob::dispatch($uploadAPIURL,$input['photo'],'user');

            $status = MemberDetail::create($input);
            if($status){
                return response()->json(['status'=>true,'message'=>'Your registration is done successfully. Admin will verify your profile, and Username and Password will be send on your email, and that username and password will be one for all your family\'s mobile devices.']);
            } else {
                return response()->json(['status'=>false,'message'=>'Data not saved!']);
            }
        }catch(Exception $e){
            return response()->json(['status'=>false,'message'=>'Something went wrong!','data'=>$e->getMessage()]);
        }
    }

    public function approveMember(Request $request)
    {
        if(isset($request->id)){
            $member = MemberDetail::find($request->id);
            User::create([
                'member_id' => $member->member_id,
                'name' => $member->full_name_eng,
                'email' => strtolower($member->email_id),
                'username' => strtolower($member->email_id),
                'password' => Hash::make($this->my_simple_crypt($member->password,'d')),
            ]);

            return response()->json(['status'=>true]);
        } else {
            return response()->json(['status'=>false]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function check()
    {
        
        return $this->my_simple_crypt("SmJUc3hsbFkvTE1ra0RjbDJCSjZiZz09",'d');
    }
}
