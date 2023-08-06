<?php

namespace App\Jobs;

use App\Mail\TicketAnswerEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use  App\Mail\TicketAnswerMail;
class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    protected $emailReciever;


    
    public function __construct($email)
    {
        $this->emailReciever = $email;
    }

    
    public function handle()
    {

        $email = new TicketAnswerMail($this->emailReciever);

        Mail::to($this->emailReciever)->send($email);

        
    }
}
