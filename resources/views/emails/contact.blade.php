<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: white; border-radius: 10px; overflow: hidden;">
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; text-align: center;">
            <h1 style="margin: 0;">📩 Nouveau Message de Contact</h1>
        </div>

        <div style="padding: 30px;">
            <p style="color: #333; margin-bottom: 20px;">Vous avez reçu un nouveau message via le formulaire de contact :</p>

            <div style="background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #667eea;">
                <div style="font-weight: bold; color: #667eea; margin-bottom: 5px;">Nom complet</div>
                <div style="color: #333;">{{ $contact->first_name }} {{ $contact->last_name }}</div>
            </div>

            <div style="background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #667eea;">
                <div style="font-weight: bold; color: #667eea; margin-bottom: 5px;">Email</div>
                <div style="color: #333;"><a href="mailto:{{ $contact->email }}" style="color: #667eea;">{{ $contact->email }}</a></div>
            </div>

            <div style="background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #667eea;">
                <div style="font-weight: bold; color: #667eea; margin-bottom: 5px;">📱 Téléphone</div>
                <div style="color: #333;">{{ $contact->phone }}</div>
            </div>

            <div style="background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #667eea;">
                <div style="font-weight: bold; color: #667eea; margin-bottom: 5px;">Sujet</div>
                <div style="color: #333;">
                    @switch($contact->subject)
                        @case('pack')
                            Information sur les packs
                            @break
                        @case('devis')
                            Demande de devis
                            @break
                        @case('reservation')
                            Réservation
                            @break
                        @case('autre')
                            Autre demande
                            @break
                        @default
                            {{ $contact->subject }}
                    @endswitch
                </div>
            </div>

            <div style="background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #667eea;">
                <div style="font-weight: bold; color: #667eea; margin-bottom: 5px;">Message</div>
                <div style="color: #333; white-space: pre-wrap;">{{ $contact->message }}</div>
            </div>

            <div style="margin-top: 30px; text-align: center;">
                <a href="mailto:{{ $contact->email }}"
                   style="background: #667eea; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block; margin: 5px;">
                    Répondre par email
                </a>

                <a href="https://wa.me/{{ str_replace(['+', ' ', '-', '(', ')'], '', $contact->phone) }}"
                   style="background: #25D366; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block; margin: 5px;">
                    Répondre sur WhatsApp
                </a>
            </div>
        </div>

        <div style="background: #f8f9fa; padding: 20px; text-align: center; color: #666; font-size: 12px;">
            Message reçu le {{ $contact->created_at->format('d/m/Y à H:i') }}
        </div>
    </div>
</body>
</html>

