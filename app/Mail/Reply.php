<?php

namespace App\Mail;

use App\Model\Messages;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Reply extends Mailable
{
    use Queueable, SerializesModels;
    protected $answer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($answer)
    {
        $this->answer = $answer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $answer = $this->answer;
        return $this->view('admin.pages.message.reply', compact('answer'));
    }
}
