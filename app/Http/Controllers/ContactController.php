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
        try {
            // Validation
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'subject' => 'required|in:pack,devis,reservation,autre',
                'message' => 'required|string|max:5000'
            ]);

            // Sauvegarder dans la base de données
            $contact = Contact::create($validated);

            // Envoyer l'email au gérant
            try {
                Mail::to('maguipmadonna@gmail.com')->send(new ContactReceived($contact));

                return response()->json([
                    'success' => true,
                    'message' => 'Message envoyé avec succès!'
                ], 200);

            } catch (\Exception $e) {
                // Log de l'erreur pour le débogage
                \Log::error('Email error: ' . $e->getMessage());
                \Log::error('Email stack trace: ' . $e->getTraceAsString());

                // Même si l'email échoue, on retourne un succès car le contact est sauvegardé
                return response()->json([
                    'success' => true,
                    'message' => 'Votre message a été enregistré. Nous vous répondrons bientôt.'
                ], 200);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Veuillez vérifier les informations saisies.',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            \Log::error('Contact form error: ' . $e->getMessage());
            \Log::error('Contact form stack trace: ' . $e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue. Veuillez réessayer plus tard.'
            ], 500);
        }
    }
}
