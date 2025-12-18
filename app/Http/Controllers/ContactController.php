<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    /**
     * Store a newly created contact message.
     */
    public function store(Request $request)
    {
        // Validation avec messages personnalisés
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'subject' => ['required', 'in:pack,devis,reservation,autre'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'first_name.required' => 'Le prénom est obligatoire.',
            'last_name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'phone.required' => 'Le téléphone est obligatoire.',
            'subject.required' => 'Le sujet est obligatoire.',
            'subject.in' => 'Le sujet sélectionné n\'est pas valide.',
            'message.required' => 'Le message est obligatoire.',
            'message.max' => 'Le message ne peut pas dépasser 5000 caractères.',
        ]);

        try {
            // Sauvegarder dans la base de données
            $contact = Contact::create($validated);

            // Envoyer l'email au gérant
            $adminEmail = config('mail.admin_email');
            
            if (!$adminEmail) {
                Log::warning('ADMIN_EMAIL non configuré dans le fichier .env');
                return response()->json([
                    'success' => false,
                    'message' => 'Configuration email manquante. Veuillez contacter l\'administrateur.'
                ], 500);
            }

            Mail::to($adminEmail)->send(new ContactReceived($contact));

            Log::info('Message de contact reçu et email envoyé', [
                'contact_id' => $contact->id,
                'email' => $contact->email,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Message envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.'
            ]);

        } catch (\Exception $e) {
            // Logger l'erreur pour le débogage
            Log::error('Erreur lors de l\'envoi du message de contact', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Si l'email échoue mais que le contact est sauvegardé, retourner un succès partiel
            if (isset($contact) && $contact->exists) {
                return response()->json([
                    'success' => true,
                    'message' => 'Votre message a été enregistré. Nous vous contacterons bientôt.',
                    'warning' => 'L\'envoi de l\'email a échoué, mais votre message a bien été sauvegardé.'
                ], 202); // 202 Accepted
            }

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.'
            ], 500);
        }
    }
}
