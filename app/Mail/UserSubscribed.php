<?php

namespace App\Mail;

use App\Models\subscribe;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserSubscribed extends Mailable
{
    use Queueable, SerializesModels;
    public $subscribe;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(subscribe $subscribe)
    {
      $this->subscribe = $subscribe;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.subscribe.mian');
    }
}
