<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public$name,$date,$time,$table_number;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$date,$time,$table_number)
    {
        $this->name=$name;
        $this->date=$date;
        $this->time=$time;
        $this->table_number=$table_number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backend.emails.reservation');
    }
}
