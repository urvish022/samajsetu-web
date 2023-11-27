<?php

namespace App\Jobs;

use App\Mail\SendLoginInfoMail;
use App\Models\MemberDetail;
use App\Traits\UtilTrait;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
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
        try{
            $password = $this->my_simple_crypt($this->memberDetail->password,'d');
            $username = $this->memberDetail->user_name;
            $name = $this->memberDetail->full_name_eng;
            
            $body = View::make('emails.login-info-email')->with(compact('name','username','password'));
            
            $status = Mail::html($body,function($message) use($username){
                $message->to($username)
                ->subject("Samajsetu Account Login Information")
                ->replyTo(Config::get('mail.mailers.smtp.username'))
                ->from(Config::get('mail.mailers.smtp.username'),"Samajsetu");
            });

            Log::info($this->memberDetail->user_name." : ". $password);
            
        } catch (Exception $e){
            Log::error("Error! while sending email :". $e->getMessage());
        }
    }
}
