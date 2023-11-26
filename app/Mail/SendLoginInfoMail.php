<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\MemberDetail;

class SendLoginInfoMail extends Mailable 
{
    use SerializesModels;
    public $full_name_eng, $password, $user_name;

    public function __construct($full_name_eng, $password, $user_name)
    {
        $this->full_name_eng = $full_name_eng;
        $this->password = $password;
        $this->user_name = $user_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.login-info-email')
            ->with(['username' => $this->user_name, 'password' => $this->password,'name' => $this->full_name_eng])
            ->subject('Samajsetu Account Login Information');
    }
}
