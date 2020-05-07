<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var
     */
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirmation', [
            'token' => $this->user->confirmation_token,
            'id' => $this->user->id,
            'name' => $this->user->first_name,
        ]);
    }
}
