<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderForAdminMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $number;
    public $email;
    public $message;
    public $id_product;
    /**
     * Create a new message instance.
     */
    public function __construct( $data )
    {
        $data = explode(',', $data);
        $this->name = $data[0];
        $this->email=$data[1];
        $this->number=$data[2];
        $this->message=$data[3];
        $this->id_product=$data[4];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order For Admin Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'admin.orderForAdmin.mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
