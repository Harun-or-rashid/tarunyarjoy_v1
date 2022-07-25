<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class BloodRequest extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $brequest;
    public $volunteerId;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($brequest, $volunteerId)
    {
        $this->brequest = $brequest;
        $this->volunteerId = $volunteerId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = URL::signedRoute('comingToDonate', ['bRequestId' => $this->brequest->id, 'userId' => $this->volunteerId]);
        $info=[
            'b_group'=>$this->brequest->blood_group,
            'phone'=>$this->brequest->phone,
            'location'=>$this->brequest->location,
            'url'=>$url,
        ];
        return $this->markdown('email.BloodRequest')
            ->with(['info' => $info]);
    }
}
