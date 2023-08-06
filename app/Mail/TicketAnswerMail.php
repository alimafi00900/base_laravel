<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketAnswerMail extends Mailable
{
    use Queueable, SerializesModels;




    protected $email;

    
    public function __construct($email)
    {
        $this->email = $email;
    }

    
    public function build()
    {
        $email = $this->email;
        return $this->view('email.TicketAnswerEmail' , compact('email'));
    }
}
