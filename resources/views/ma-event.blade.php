<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Ma Event Surprise - Organisation d'événements au Cameroun</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar-modern" id="navbar">
        <div class="container-custom">
            <div style="display: flex; align-items: center; justify-content: space-between; padding: var(--space-4) 0;">
                <a href="#Acceuil" class="navbar-brand-modern">Ma Event Surprise</a>
                
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border: none; background: none; padding: var(--space-2);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul style="display: flex; align-items: center; gap: var(--space-2); list-style: none; margin: 0; padding: 0; flex-wrap: wrap;">
                        <li><a href="#Acceuil" class="nav-link-modern">Accueil</a></li>
                        <li><a href="#services" class="nav-link-modern">Services</a></li>
                        <li><a href="#Propos" class="nav-link-modern">À propos</a></li>
                        <li><a href="#packs" class="nav-link-modern">Nos packs</a></li>
                        <li><a href="#contact" class="nav-link-modern">Contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-modern" id="Acceuil">
        <div class="container-custom">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-12); align-items: center;">
                <div class="hero-content-modern">
                    <span class="hero-badge-modern">Événements Inoubliables</span>
                    <h1 class="hero-title-modern">
                        Parfumez Chaque Instant<br>
                        <span class="accent">avec Vos Proches</span>
                    </h1>
                    <p class="hero-subtitle-modern">
                        Créez des souvenirs précieux et des moments magiques. Chaque célébration mérite d'être unique et mémorable.
                    </p>
                    <div class="hero-actions-modern">
                        <a href="#services" class="btn btn-primary btn-lg">Découvrir nos services</a>
                        <a href="https://wa.me/237655563081?text=Bonjour,%20je%20souhaite%20avoir%20des%20informations%20sur%20vos%20services"
                           class="btn btn-outline btn-lg" target="_blank">Nous contacter</a>
                    </div>
                    <div class="hero-stats-modern">
                        <div class="stat-item-modern">
                            <div class="stat-number-modern">100+</div>
                            <div class="stat-label-modern">Événements réussis</div>
                        </div>
                        <div class="stat-item-modern">
                            <div class="stat-number-modern">98%</div>
                            <div class="stat-label-modern">Clients satisfaits</div>
                        </div>
                        <div class="stat-item-modern">
                            <div class="stat-number-modern">1+</div>
                            <div class="stat-label-modern">Ans d'expérience</div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block" style="position: relative;">
                    <div style="position: relative; height: 500px; border-radius: var(--radius-2xl); overflow: hidden; background: var(--color-bg-secondary); box-shadow: var(--shadow-xl);">
                        <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=800&h=600&fit=crop&q=80" 
                             alt="Événement festif avec ballons et décoration" 
                             style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--radius-2xl);">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, transparent 100%);"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="section-modern section-modern-alt">
        <div class="container-custom">
            <div class="section-header-modern">
                <span class="section-badge-modern">Nos Services</span>
                <h2 class="section-title-modern">Des prestations sur mesure</h2>
                <p class="section-subtitle-modern">Pour tous vos événements, nous offrons des solutions adaptées à vos besoins</p>
            </div>
            <div class="services-grid-modern">
                <div class="service-card-modern">
                    <div class="service-icon-modern">1</div>
                    <h3 class="service-title-modern">Mariages</h3>
                    <p class="service-description-modern">Organisation complète de votre jour unique, de A à Z. Chaque détail compte pour créer un moment inoubliable.</p>
                </div>
                <div class="service-card-modern">
                    <div class="service-icon-modern">2</div>
                    <h3 class="service-title-modern">Anniversaires</h3>
                    <p class="service-description-modern">Des fêtes mémorables pour tous les âges et tous les styles. Nous rendons chaque anniversaire spécial.</p>
                </div>
                <div class="service-card-modern">
                    <div class="service-icon-modern">3</div>
                    <h3 class="service-title-modern">Événements Pro</h3>
                    <p class="service-description-modern">Séminaires, team building et événements d'entreprise. Professionnalisme et efficacité garantis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="Propos" class="section-modern">
        <div class="container-custom">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-12); align-items: center;">
                <div>
                    <span class="section-badge-modern">Notre Histoire</span>
                    <h2 class="section-title-modern" style="text-align: left; margin-bottom: var(--space-6);">
                        À Propos de<br>
                        <span style="color: var(--color-primary);">Ma Event Surprise</span>
                        </h2>
                    <p style="font-size: var(--text-lg); color: var(--color-text-secondary); margin-bottom: var(--space-6); line-height: var(--leading-relaxed);">
                        Depuis plus de 10 ans, nous transformons vos rêves en moments magiques inoubliables. Notre passion pour l'excellence et notre attention aux détails font de chaque événement une expérience unique.
                    </p>
                    <div style="display: flex; flex-direction: column; gap: var(--space-4); margin-bottom: var(--space-8);">
                        <div style="display: flex; gap: var(--space-4); align-items: flex-start;">
                            <div style="width: 40px; height: 40px; background-color: var(--color-primary-100); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: var(--color-primary); font-weight: var(--font-bold); flex-shrink: 0;">✓</div>
                                <div>
                                <h4 style="font-size: var(--text-lg); font-weight: var(--font-semibold); margin-bottom: var(--space-1);">Expertise reconnue</h4>
                                <p style="color: var(--color-text-secondary); margin: 0;">Plus de 500 événements réussis avec passion</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: var(--space-4); align-items: flex-start;">
                            <div style="width: 40px; height: 40px; background-color: var(--color-primary-100); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: var(--color-primary); font-weight: var(--font-bold); flex-shrink: 0;">✓</div>
                                <div>
                                <h4 style="font-size: var(--text-lg); font-weight: var(--font-semibold); margin-bottom: var(--space-1);">Sur-mesure</h4>
                                <p style="color: var(--color-text-secondary); margin: 0;">Chaque détail pensé selon vos désirs</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: var(--space-4); align-items: flex-start;">
                            <div style="width: 40px; height: 40px; background-color: var(--color-primary-100); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: var(--color-primary); font-weight: var(--font-bold); flex-shrink: 0;">✓</div>
                                <div>
                                <h4 style="font-size: var(--text-lg); font-weight: var(--font-semibold); margin-bottom: var(--space-1);">Équipe dévouée</h4>
                                <p style="color: var(--color-text-secondary); margin: 0;">Des professionnels passionnés à votre écoute</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary btn-lg">Discutons de votre projet</a>
                </div>
                <div class="d-none d-lg-block" style="position: relative;">
                    <div style="position: relative; height: 500px; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl);">
                        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=800&h=600&fit=crop&q=80" 
                             alt="Équipe professionnelle organisant un événement" 
                             style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.1) 100%); display: flex; align-items: flex-end; padding: var(--space-8);">
                            <div style="position: relative; z-index: 1; color: white;">
                                <h3 style="font-size: var(--text-2xl); font-weight: var(--font-semibold); margin-bottom: var(--space-2); color: white;">Notre Engagement</h3>
                                <p style="color: rgba(255, 255, 255, 0.95); font-size: var(--text-lg); line-height: var(--leading-relaxed);">Excellence et passion au service de vos événements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packs Section -->
    <section id="packs" class="packs-section-modern">
        <div class="container-fluid" style="padding: 0;">
            <div class="section-header-modern" style="max-width: 1280px; margin: 0 auto var(--space-12); padding: 0 var(--space-4);">
                <span class="section-badge-modern" style="background-color: rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.9);">Nos Offres</span>
                <h2 class="section-title-modern">Formules Premium</h2>
                <p class="section-subtitle-modern">Des solutions sur mesure pour valoriser chaque moment important</p>
            </div>
            <div class="packs-grid-modern">
                <div class="pack-card-modern">
                    <div class="pack-header-modern">
                        <div class="pack-tier-modern">Essentiel</div>
                        <h3 class="pack-name-modern">Classique</h3>
                        <div class="pack-price-modern">
                            <span class="amount">34K</span>
                            <span class="currency">FCFA</span>
                        </div>
                        <p class="pack-description-modern">L'essentiel pour marquer l'occasion</p>
                    </div>
                    <ul class="pack-features-modern">
                        <li>Gâteau d'anniversaire</li>
                        <li>Ambiance musicale</li>
                        <li>Montre élégante</li>
                        <li>Carte de vœux personnalisée</li>
                    </ul>
                    <button class="pack-button-modern">Sélectionner</button>
                </div>

                <div class="pack-card-modern">
                    <div class="pack-header-modern">
                        <div class="pack-tier-modern">Populaire</div>
                        <h3 class="pack-name-modern">Élégance</h3>
                        <div class="pack-price-modern">
                            <span class="amount">44K</span>
                            <span class="currency">FCFA</span>
                        </div>
                        <p class="pack-description-modern">Une touche de raffinement supplémentaire</p>
                    </div>
                    <ul class="pack-features-modern">
                        <li>Gâteau d'anniversaire</li>
                        <li>Ambiance musicale</li>
                        <li>Montre élégante</li>
                        <li>Parfum de luxe</li>
                        <li>Carte de vœux personnalisée</li>
                    </ul>
                    <button class="pack-button-modern">Sélectionner</button>
                </div>

                <div class="pack-card-modern featured">
                    <div class="pack-header-modern">
                        <div class="pack-tier-modern">Premium</div>
                        <h3 class="pack-name-modern">Prestige</h3>
                        <div class="pack-price-modern">
                            <span class="amount">54K</span>
                            <span class="currency">FCFA</span>
                        </div>
                        <p class="pack-description-modern">L'excellence pour les moments d'exception</p>
                    </div>
                    <ul class="pack-features-modern">
                        <li>Gâteau d'anniversaire</li>
                        <li>Ambiance musicale</li>
                        <li>Panier garni premium</li>
                        <li>Carte de vœux personnalisée</li>
                    </ul>
                    <button class="pack-button-modern">Sélectionner</button>
                </div>

                <div class="pack-card-modern">
                    <div class="pack-header-modern">
                        <div class="pack-tier-modern">Luxe</div>
                        <h3 class="pack-name-modern">Excellence</h3>
                        <div class="pack-price-modern">
                            <span class="amount">64K</span>
                            <span class="currency">FCFA</span>
                        </div>
                        <p class="pack-description-modern">Une expérience mémorable complète</p>
                    </div>
                    <ul class="pack-features-modern">
                        <li>Gâteau d'anniversaire</li>
                        <li>Ambiance musicale</li>
                        <li>Panier garni premium</li>
                        <li>Séance photo professionnelle</li>
                        <li>Carte de vœux personnalisée</li>
                    </ul>
                    <button class="pack-button-modern">Sélectionner</button>
                </div>

                <div class="pack-card-modern">
                    <div class="pack-header-modern">
                        <div class="pack-tier-modern">VIP</div>
                        <h3 class="pack-name-modern">Royal</h3>
                        <div class="pack-price-modern">
                            <span class="amount">74K</span>
                            <span class="currency">FCFA</span>
                        </div>
                        <p class="pack-description-modern">Le summum du prestige et du raffinement</p>
                    </div>
                    <ul class="pack-features-modern">
                        <li>Gâteau d'anniversaire</li>
                        <li>Ambiance musicale</li>
                        <li>Panier garni premium</li>
                        <li>Séance photo professionnelle</li>
                        <li>Vin de prestige</li>
                        <li>Parfum de luxe</li>
                        <li>Carte de vœux personnalisée</li>
                    </ul>
                    <button class="pack-button-modern">Sélectionner</button>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section-modern">
        <div class="container-custom">
            <div class="contact-grid-modern">
                <div class="contact-info-modern">
                    <span class="section-badge-modern">Contactez-nous</span>
                    <h2 class="section-title-modern" style="text-align: left; margin-bottom: var(--space-4);">Parlons de votre projet</h2>
                    <p class="section-subtitle-modern" style="text-align: left; margin-bottom: var(--space-8);">
                        Notre équipe est à votre écoute pour transformer vos moments spéciaux en expériences inoubliables.
                    </p>
                    <div>
                        <div class="contact-info-card-modern">
                            <div class="contact-icon-modern">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-label-modern">Email</div>
                                <div class="contact-value-modern">maguipmadonna@gmail.com</div>
                            </div>
                        </div>
                        <div class="contact-info-card-modern">
                            <div class="contact-icon-modern">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-label-modern">Téléphone</div>
                                <div class="contact-value-modern">+237 655 563 081</div>
                            </div>
                        </div>
                        <div class="contact-info-card-modern">
                            <div class="contact-icon-modern">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-label-modern">Localisation</div>
                                <div class="contact-value-modern">Yaoundé, Cameroun</div>
                            </div>
                        </div>
                        <div class="contact-info-card-modern">
                            <div class="contact-icon-modern">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 6v6l4 2"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-label-modern">Horaires</div>
                                <div class="contact-value-modern">Lun - Sam: 8h - 18h</div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="contact-form-modern">
                    <form id="contactForm">
                        <div class="form-row-modern">
                            <div class="form-group-modern">
                                    <label for="firstName" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group-modern">
                                    <label for="lastName" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                            </div>
                        <div class="form-row-modern">
                            <div class="form-group-modern">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group-modern">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                        <div class="form-group-modern full-width">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">Sélectionnez un sujet</option>
                                        <option value="pack">Information sur les packs</option>
                                        <option value="devis">Demande de devis</option>
                                        <option value="reservation">Réservation</option>
                                        <option value="autre">Autre demande</option>
                                    </select>
                                </div>
                        <div class="form-group-modern full-width">
                                    <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" maxlength="5000" required></textarea>
                            <small class="form-text">Maximum 5000 caractères</small>
                                </div>
                        <button type="submit" class="form-submit-modern">
                            <span>Envoyer le message</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <line x1="22" y1="2" x2="11" y2="13"/>
                                            <path d="M22 2L15 22l-4-9-9-4z"/>
                                        </svg>
                                </button>
                    </form>

                    <div class="success-message-modern" id="successMessage">
                        <div class="success-icon-modern">✓</div>
                        <h4 style="font-size: var(--text-xl); font-weight: var(--font-semibold); margin-bottom: var(--space-2);">Message envoyé avec succès !</h4>
                        <p style="color: var(--color-text-secondary); margin: 0;">Nous vous répondrons dans les plus brefs délais.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer-modern">
        <div class="container-custom">
            <div class="footer-grid-modern">
                <div>
                    <div class="footer-brand-modern">
                            <h3>Ma Event Surprise</h3>
                        <p class="footer-description-modern">
                                Créateurs de moments magiques et inoubliables. Nous transformons vos rêves en réalité depuis plus de 10 ans.
                            </p>
                        </div>
                    <div class="social-links-modern">
                        <a href="#" class="social-link-modern" aria-label="Facebook">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                                </svg>
                            </a>
                        <a href="#" class="social-link-modern" aria-label="Instagram">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                                </svg>
                            </a>
                        <a href="#" class="social-link-modern" aria-label="WhatsApp">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                <div>
                    <h4 class="footer-title-modern">Liens Rapides</h4>
                    <ul class="footer-links-modern">
                            <li><a href="#Acceuil">Accueil</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#Propos">À propos</a></li>
                            <li><a href="#packs">Nos packs</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                <div>
                    <h4 class="footer-title-modern">Services</h4>
                    <ul class="footer-links-modern">
                            <li><a href="#">Mariages</a></li>
                            <li><a href="#">Anniversaires</a></li>
                            <li><a href="#">Événements Pro</a></li>
                            <li><a href="#">Galas</a></li>
                        </ul>
                    </div>
                <div>
                    <h4 class="footer-title-modern">Contact</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: var(--text-sm); margin-bottom: var(--space-4);">
                        Yaoundé, Cameroun<br>
                        maguipmadonna@gmail.com<br>
                        +237 655 563 081
                    </p>
                    <form class="newsletter-form" style="display: flex; gap: var(--space-2);">
                        <input type="email" class="newsletter-input" placeholder="Votre email" required style="flex: 1; padding: var(--space-3); background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: var(--radius-md); color: white;">
                        <button type="submit" class="newsletter-btn" style="padding: var(--space-3) var(--space-4); background: white; color: var(--color-primary); border: none; border-radius: var(--radius-md); font-weight: var(--font-semibold); cursor: pointer;">S'inscrire</button>
                        </form>
                </div>
            </div>
            <div class="footer-bottom-modern">
                <p>&copy; 2025 Ma Event Surprise. Tous droits réservés. Créé avec amour au Cameroun</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/packs-timeline.js') }}"></script>
    <script src="{{ asset('js/contact-form.js') }}"></script>
    <script src="{{ asset('js/newsletter.js') }}"></script>
</body>
</html>
