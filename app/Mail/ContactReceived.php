<?php


namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        $subjectLabel = match($this->contact->subject) {
            'pack' => 'Information sur les packs',
            'devis' => 'Demande de devis',
            'reservation' => 'Réservation',
            'autre' => 'Autre demande',
            default => 'Nouveau message',
        };

        return $this->subject('Nouveau message de contact - ' . $subjectLabel)
                    ->view('emails.contact');
    }
}
