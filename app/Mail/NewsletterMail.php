<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailForm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailForm)
    {
        $this->mailForm = $mailForm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('zainab@gmail.com')->subject('Email de confirmation')->markdown('mailForm.templateEmail',compact('mailForm'));
    }
}
