<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 40px 20px;
            line-height: 1.6;
        }

        .email-wrapper {
            max-width: 650px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 50px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        }

        .header h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
            position: relative;
            z-index: 1;
        }

        .header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            margin-top: 10px;
            position: relative;
            z-index: 1;
        }

        .content {
            padding: 45px 40px;
        }

        .intro-text {
            color: #4a5568;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .info-section {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 25px;
            border: 1px solid #e2e8f0;
        }

        .info-row {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .info-row:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            flex-shrink: 0;
        }

        .info-icon svg {
            width: 20px;
            height: 20px;
            stroke: white;
            fill: none;
        }

        .info-content {
            flex: 1;
        }

        .info-label {
            font-size: 12px;
            font-weight: 600;
            color: #667eea;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .info-value {
            color: #2d3748;
            font-size: 15px;
            font-weight: 500;
            word-break: break-word;
        }

        .info-value a {
            color: #667eea;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-value a:hover {
            color: #764ba2;
        }

        .message-box {
            background: #ffffff;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 25px;
            margin-top: 25px;
        }

        .message-label {
            font-size: 12px;
            font-weight: 600;
            color: #667eea;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .message-text {
            color: #2d3748;
            font-size: 15px;
            line-height: 1.8;
            white-space: pre-wrap;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 35px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s ease;
            flex: 1;
            min-width: 180px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
        }

        .btn-whatsapp {
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
        }

        .btn-whatsapp:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.5);
        }

        .footer {
            background: #f8fafc;
            padding: 30px 40px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }

        .footer-text {
            color: #718096;
            font-size: 13px;
            line-height: 1.6;
        }

        .footer-brand {
            color: #667eea;
            font-weight: 600;
            margin-top: 10px;
            font-size: 14px;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, #e2e8f0 50%, transparent 100%);
            margin: 30px 0;
        }

        @media only screen and (max-width: 600px) {
            body {
                padding: 20px 10px;
            }

            .header {
                padding: 35px 25px;
            }

            .header h1 {
                font-size: 24px;
            }

            .content {
                padding: 30px 25px;
            }

            .info-section {
                padding: 20px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .footer {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <!-- Header -->
        <div class="header">
            <h1>Nouveau Message de Contact</h1>
            <p>Ma Event Surprise</p>
        </div>

        <!-- Content -->
        <div class="content">
            <p class="intro-text">
                Bonjour,<br><br>
                Vous avez reçu un nouveau message via le formulaire de contact de votre site web. Voici les détails de la demande :
            </p>

            <!-- Info Section -->
            <div class="info-section">
                <!-- Nom complet -->
                <div class="info-row">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Nom complet</div>
                        <div class="info-value">{{ $contact->first_name }} {{ $contact->last_name }}</div>
                    </div>
                </div>

                <!-- Email -->
                <div class="info-row">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Adresse email</div>
                        <div class="info-value">
                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                        </div>
                    </div>
                </div>

                <!-- Téléphone -->
                <div class="info-row">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Téléphone</div>
                        <div class="info-value">{{ $contact->phone }}</div>
                    </div>
                </div>

                <!-- Sujet -->
                <div class="info-row">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14,2 14,8 20,8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10,9 9,9 8,9"></polyline>
                        </svg>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Sujet de la demande</div>
                        <div class="info-value">
                            @switch($contact->subject)
                                @case('pack') Information sur les packs @break
                                @case('devis') Demande de devis @break
                                @case('reservation') Réservation @break
                                @case('autre') Autre demande @break
                            @endswitch
                        </div>
                    </div>
                </div>
            </div>

            <!-- Message -->
            <div class="message-box">
                <div class="message-label">Message</div>
                <div class="message-text">{{ $contact->message }}</div>
            </div>

            <div class="divider"></div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="mailto:{{ $contact->email }}" class="btn btn-primary">
                    Répondre par Email
                </a>
                <a href="https://wa.me/{{ str_replace(['+', ' '], '', $contact->phone) }}" class="btn btn-whatsapp">
                    Répondre sur WhatsApp
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p class="footer-text">
                Message reçu le {{ $contact->created_at->format('d/m/Y à H:i') }}
            </p>
            <p class="footer-brand">Ma Event Surprise</p>
        </div>
    </div>
</body>
</html>
