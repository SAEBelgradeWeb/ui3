<?php

namespace App\Mail;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOfferEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $doctor;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.new-offer')->with(['doctor' => $this->doctor]);
    }
}
