<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

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
        return $this->view('emails.user_registered')
                    ->subject('New User Registration')
                    ->with([
                        'userName' => $this->user->name,
                        'userEmail' => $this->user->email,
                        'userMobile' => $this->user->mobile,
                        'userNationality' => $this->user->nationality,
                        'userDegree' => $this->user->degree,
                        'userDoB' => $this->user->dob,
                        'userEnglishLevel' => $this->user->english_level,
                        'userTraining' => $this->user->training,
                        'userExperience' => $this->user->experience,
                        'userReferees' => $this->user->referees,
                        'settled' => $this->user->settled,
                    ]);
    }
}
