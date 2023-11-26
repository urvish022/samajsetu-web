<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Benwilkins\FCM\FcmMessage;
use Illuminate\Support\Facades\Log;

class FCMNotification extends Notification
{
    use Queueable;
    protected $device_tokens, $data;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $data)
    {
        $this->device_tokens = $token;
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['fcm'];
    }

    public function toFcm($notifiable) 
    {
        $message = new FcmMessage();
        $message->content([
            'title'        => $this->data['title'], 
            'body'         => $this->data['message'], 
            'sound'        => '', // Optional 
            'icon'         => $this->data['image'], // Optional
            'click_action' => '' // Optional
        ])->data([
            'type' => $this->data['type'] // Optional
        ])->priority(FcmMessage::PRIORITY_HIGH); // Optional - Default is 'normal'.
        
        return $message;
    }

    public function routeNotificationForFcm($notification)
    {
        return $this->device_tokens;
    }
}
