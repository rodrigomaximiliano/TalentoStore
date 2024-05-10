<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $Mailmessage;
    public $subject;

    public function __construct($message, $subject)
    {
        $this->Mailmessage = $message;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this
            ->subject($this->subject)
            ->view('mail-template.welcome-mail');
    }
}
