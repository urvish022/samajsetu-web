<?php

namespace App\Http\Controllers;

use App\Jobs\SendFcmNotification;
use App\Jobs\SendMemberEmailJob;
use App\Models\MemberDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function sendNotification(Request $request){
        $input = $request->all();

        if(!empty($input['id'])){

            SendFcmNotification::dispatch($input['id']);
        }

        return response()->json(['status'=>true]);
    }

    public function sendResetPasswordEmail(Request $request)
    {
        $input = $request->all();

        if(!empty($input['id'])){
            $memberDetail = MemberDetail::find($input['id']);
            dispatch((new SendMemberEmailJob($memberDetail))->onConnection('database'));
        }

        return response()->json(['status'=>true]);
    }
}

