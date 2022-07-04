<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BaseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $subject, string $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }
}
