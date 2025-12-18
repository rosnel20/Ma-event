<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 10px; overflow: hidden; }
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; text-align: center; }
        .content { padding: 30px; }
        .info-box { background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #667eea; }
        .label { font-weight: bold; color: #667eea; margin-bottom: 5px; }
        .value { color: #333; }
        .footer { background: #f8f9fa; padding: 20px; text-align: center; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1> Nouveau Message de Contact</h1>
        </div>

        <div class="content">
            <p>Vous avez reçu un nouveau message via le formulaire de contact :</p>

            <div class="info-box">
                <div class="label"> Nom complet</div>
                <div class="value">{{ $contact->first_name }} {{ $contact->last_name }}</div>
            </div>

            <div class="info-box">
                <div class="label">Email</div>
                <div class="value"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
            </div>

            <div class="info-box">
                <div class="label">📱 Téléphone</div>
                <div class="value">{{ $contact->phone }}</div>
            </div>

            <div class="info-box">
                <div class="label"> Sujet</div>
                <div class="value">
                    @switch($contact->subject)
                        @case('pack') Information sur les packs @break
                        @case('devis') Demande de devis @break
                        @case('reservation') Réservation @break
                        @case('autre') Autre demande @break
                    @endswitch
                </div>
            </div>

            <div class="info-box">
                <div class="label">Message</div>
                <div class="value">{{ $contact->message }}</div>
            </div>

            <div style="margin-top: 30px; text-align: center;">
                <a href="mailto:{{ $contact->email }}"
                   style="background: #667eea; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block;">
                     Répondre par email
                </a>

                <a href="https://wa.me/{{ str_replace(['+', ' '], '', $contact->phone) }}"
                   style="background: #25D366; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block; margin-left: 10px;">
                     Répondre sur WhatsApp
                </a>
            </div>
        </div>

        <div class="footer">
            Message reçu le {{ $contact->created_at->format('d/m/Y à H:i') }}
        </div>
    </div>
</body>
</html>
