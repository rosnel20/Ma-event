<?php


namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|in:pack,devis,reservation,autre',
            'message' => 'required|string'
        ]);

        // Sauvegarder dans la base de données
        $contact = Contact::create($validated);

        // Envoyer l'email au gérant
        try {
            Mail::to(env('ADMIN_EMAIL'))->send(new ContactReceived($contact));

            return response()->json([
                'success' => true,
                'message' => 'Message envoyé avec succès!'
            ]);

        } catch (\Exception $e) {
            // Si l'email échoue, le message est quand même sauvegardé
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l\'envoi. Veuillez réessayer.'
            ], 500);
        }
    }
}
