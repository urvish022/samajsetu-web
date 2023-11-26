<?php

namespace App\Jobs;

use App\Mail\SendLoginInfoMail;
use App\Models\MemberDetail;
use App\Traits\UtilTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class SendMemberEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use UtilTrait;

    public $memberDetail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($memberDetail)
    {
        $this->memberDetail = $memberDetail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $password = $this->my_simple_crypt($this->memberDetail->password,'d');
        $username = $this->memberDetail->user_name;
        $name = $this->memberDetail->full_name_eng;
        
        $body = View::make('emails.login-info-email')->with(compact('name','username','password'));
        
        $status = Mail::html($body,function($message) use($username){
            $message->to($username)
            ->subject("Samajsetu Account Login Information")
            ->replyTo("info@samajsetu.com")
            ->from(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));
        });
        // Mail::to($this->memberDetail->user_name)->send(new SendLoginInfoMail($this->memberDetail->full_name_eng, $password, $this->memberDetail->user_name));
        Log::info("inside job");
        Log::info($this->memberDetail->user_name." : ". $password);
    }
}
