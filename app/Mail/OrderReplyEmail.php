<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderReplyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    $EmailData;
    public function __construct($EmailData)
    {
        //
        $this->EmailData = $EmailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thank you for order')
                    ->view('OrderReplyEmail.email')
                    ->with([
                        'EmailData' => $this -> EmailData
                    ]);
    }
}
