<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class uploadFile extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('File Uploaded')
        //     ->from(env("MAIL_FROM_ADDRESS", "learnandclimb@gmail.com.ca"), 'heeelp')
        //     ->view('mails.uploadFile');


        return $this->view('mails.uploadFile')
                    ->subject('New User Message')
                    ->with([
                        'file' => $this->data['file'],
                        'name' => $this->data['name'],
                        'email' => $this->data['email'],
                        'phone' => $this->data['phone'],
                        'message' => $this->data['message'],
                    ]);
    }
}
