<?php
 
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    //public variable
    public $user;

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
        return $this->subject('IT TODAY 2019 | Verify Email Address')
                    ->from('admin@ittoday.web.id')
                    ->view('emails.welcome');
    }
}
