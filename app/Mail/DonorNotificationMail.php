<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonorNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $donor;
    public $bloodRequest;

    public function __construct($donor, $bloodRequest)
    {
        $this->donor = $donor;
        $this->bloodRequest = $bloodRequest;
    }

    public function build()
    {
        return $this->from('support@cpiaabd.org')
            ->subject('Urgent Blood Donation Request')
            ->view('emails.donor_notification')
            ->with([
                'donorName' => $this->donor->name,
                'recipientName' => $this->bloodRequest->name,
                'recipientPhone' => $this->bloodRequest->phone,
            ]);
    }
}
