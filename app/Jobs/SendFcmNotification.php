<?php

namespace App\Jobs;

use App\Models\FcmDetail;
use App\Models\FcmNotification;
use App\Models\MemberDetail;
use App\Notifications\FCMNotification as NotificationsFCMNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;


class SendFcmNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $notification;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $notification = FcmNotification::find($id);
        $this->notification = $notification;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $notification = $this->notification;
        $data = [
            'title' => $notification->title,
            'message' => $notification->message,
            'image' => $notification->image,
            'type'  => $notification->type
        ];

        if($notification->is_all === 0){

            $member = MemberDetail::with(['fcm'])->where('member_id',$notification->notification_id)->first();
            $tokens = $member->fcm->pluck('fcm_token');
            
            $member->notify(new NotificationsFCMNotification($tokens, $data));
            
            // Notification::send($users, new NotificationsFCMNotification($fcm_tokens));
        }
    }

    // public function getNotification(){

    //     $notification = array();
    //     $notification['title'] = $this->title;
    //     $notification['message'] = $this->message;
    //     $notification['image'] = $this->image_url;
    //     $notification['type'] = $this->type;
    
    
    //     if(!empty($this->news_id))
    //       $notification['news_id'] = $this->news_id;
    
    //     if(!empty($this->bd_id))
    //       $notification['bd_id'] = $this->bd_id;
    
    //     if(!empty($this->event_id))
    //       $notification['event_id'] = $this->event_id;
    
    //     if(!empty($this->cpost_id))
    //       $notification['cpost_id'] = $this->cpost_id;
    
    //     if(!empty($this->pr_id))
    //       $notification['pr_id'] = $this->pr_id;
    
    //     if(!empty($this->matrimony_id))
    //       $notification['matrimony_id'] = $this->matrimony_id;
    
    //     if(!empty($this->memorial_id))
    //       $notification['memorial_id'] = $this->memorial_id;
    
    //     if(!empty($this->business_id))
    //       $notification['business_id'] = $this->business_id;
    
    //     return $notification;
    //   }
}
