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
        // AJOUTEZ CETTE LIGNE pour voir l'erreur exacte
        \Log::error('Email error: ' . $e->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'Erreur: ' . $e->getMessage()  // ← Changez ici aussi
        ], 500);
    }
}
}
