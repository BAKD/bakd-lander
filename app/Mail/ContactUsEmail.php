<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactUsEmail extends Mailable
{
    protected $data;

    function __construct($data) {
        $this->data = $data;
    }

    /**
     * Send contact us form email with basic view
     *
     * @return $this
     */
    public function build()
    {
        $this->subject = '[BAKD.io] [' . $this->data['department'] . '] Contact Form Submitted';
        return $this->view('mail/contact-us', [
            'emailData' => $this->data
        ]);
    }
}