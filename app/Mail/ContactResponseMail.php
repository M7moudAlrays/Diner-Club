<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title,$body,$name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$body,$name)
    {

        $this->title=$title;
        $this->body=$body;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backend.emails.contact');
    }
}
