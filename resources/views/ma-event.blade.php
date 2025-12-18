<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Ma Event Surprise</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light floating-navbar">
        <div class="container">
            <a href="#" class="navbar-brand fw-bold great-vibes-regular">Ma Event Surprise</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li class="nav-item">
                        <a href="#Acceuil" class="nav-link fw-medium">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link fw-medium">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Propos" class="nav-link fw-medium">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#packs" class="nav-link fw-medium">Nos packs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link fw-medium">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Hero Section -->
    <header class="hero-section" id="Acceuil">
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>

        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 hero-content">
                    <div class="badge-custom mb-4">
                         Événements Inoubliables
                    </div>
                    <h1 class="hero-title mb-4">
                        Parfumez Chaque Instant
                        <span class="highlight-text kaushan-script-regular">avec Vos Proches</span>
                    </h1>
                    <p class="hero-subtitle mb-5">
                        Créez des souvenirs précieux et des moments magiques.
                        Chaque célébration mérite d'être unique et mémorable.
                    </p>

                    <div class="d-flex gap-3 mb-5 flex-wrap">
                        <a href="#services" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                            Découvrir nos services
                        </a>
                       <!-- PAR cette ligne : -->
                        <a href="https://wa.me/237655563081?text=Bonjour,%20je%20souhaite%20avoir%20des%20informations%20sur%20vos%20services"
                        class="btn btn-outline-dark btn-lg px-5 py-3 rounded-pill"
                        target="_blank">
                         Nous contacter
                        </a>
                    </div>

                    <div class="hero-stats d-flex gap-4 flex-wrap">
                        <div class="stat-box">
                            <h3 class="stat-number">100+</h3>
                            <p class="stat-label">Événements réussis</p>
                        </div>
                        <div class="stat-box">
                            <h3 class="stat-number">98%</h3>
                            <p class="stat-label">Clients satisfaits</p>
                        </div>
                        <div class="stat-box">
                            <h3 class="stat-number">1+</h3>
                            <p class="stat-label">Ans d'expérience</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-images">
                        <div class="floating-image img-1">
                            <div class="image-card">
                                <div class="card-icon"><img src="assets/img/téléchargement.jpeg" alt="" </div>
                                <h5>Mariages</h5>
                                <p>Des cérémonies de rêve</p>
                            </div>
                        </div>
                        <div class="floating-image img-2">
                            <div class="image-card">
                                <div class="card-icon"><img src="assets/img/téléchargement.jpeg" alt="" </div>
                                <h5>Anniversaires</h5>
                                <p>Fêtes inoubliables</p>
                            </div>
                        </div>
                        <div class="floating-image img-3">
                            <div class="image-card">
                                <div class="card-icon"><img src="assets/img/téléchargement.jpeg" alt="" ></div>
                                <h5>Corporate</h5>
                                <p>Événements pros</p>
                            </div>
                        </div>
                        <div class="floating-image img-4">
                            <div class="image-card">
                                <div class="card-icon"><img src="assets/img/téléchargement.jpeg" alt="" </div>
                                <h5>Galas</h5>
                                <p>Soirées prestigieuses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </header>

    <!-- Section Services Preview -->
    <section id="services" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Nos Services</h2>
                <p class="lead text-muted">Des prestations sur mesure pour tous vos événements</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon mb-3">1</div>
                        <h4 class="fw-bold mb-3">Mariages</h4>
                        <p class="text-muted">Organisation complète de votre jour unique, de A à Z</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon mb-3">2</div>
                        <h4 class="fw-bold mb-3">Anniversaires</h4>
                        <p class="text-muted">Des fêtes mémorables pour tous les âges et tous les styles</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon mb-3">3</div>
                        <h4 class="fw-bold mb-3">Événements Pro</h4>
                        <p class="text-muted">Séminaires, team building et événements d'entreprise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section À Propos -->
    <section id="Propos" class="about-section py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <!-- Colonne texte -->
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="section-badge">Notre Histoire</span>
                        <h2 class="section-title mb-4">
                            À Propos de
                            <span class="text-primary kaushan-script-regular">Ma Event Surprise</span>
                        </h2>
                        <p class="lead mb-4">
                            Depuis plus de 10 ans, nous transformons vos rêves en moments magiques inoubliables.
                        </p>
                        <p class="text-muted mb-4">
                            Notre passion pour l'excellence et notre attention aux détails font de chaque événement
                            une expérience unique. Nous croyons que chaque célébration mérite d'être parfaite,
                            car les souvenirs que nous créons ensemble restent gravés à jamais.
                        </p>

                        <div class="about-features mb-4">
                            <div class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div>
                                    <h5 class="mb-2">Expertise reconnue</h5>
                                    <p class="text-muted mb-0">Plus de 500 événements réussis avec passion</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div>
                                    <h5 class="mb-2">Sur-mesure</h5>
                                    <p class="text-muted mb-0">Chaque détail pensé selon vos désirs</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div>
                                    <h5 class="mb-2">Équipe dévouée</h5>
                                    <p class="text-muted mb-0">Des professionnels passionnés à votre écoute</p>
                                </div>
                            </div>
                        </div>

                        <a href="#contact" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                            Discutons de votre projet
                        </a>
                    </div>
                </div>

                <!-- Colonne images -->
                <div class="col-lg-6">
                    <div class="about-images">
                        <div class="image-grid">
                            <div class="grid-item item-1">
                                <div class="image-placeholder">
                                    <span class="placeholder-icon"></span>
                                    <p class="mb-0">Mariages de rêve</p>
                                </div>
                            </div>
                            <div class="grid-item item-2">
                                <div class="image-placeholder">
                                    <span class="placeholder-icon"><div class="feature-icon">✓</div></span>
                                    <p class="mb-0">Fêtes mémorables</p>
                                </div>
                            </div>
                            <div class="grid-item item-3">
                                <div class="image-placeholder">
                                    <span class="placeholder-icon"><div class="feature-icon">✓</div></span>
                                    <p class="mb-0">Événements pros</p>
                                </div>
                            </div>
                            <div class="grid-item item-4">
                                <div class="image-placeholder">
                                    <span class="placeholder-icon"><div class="feature-icon">✓</div></span>
                                    <p class="mb-0">Anniversaires</p>
                                </div>
                            </div>
                        </div>

                        <!-- Badge de certification -->
                        <div class="certification-badge">
                            <div class="badge-content">
                                <div class="badge-number">1+</div>
                                <div class="badge-text">Années<br>d'Excellence</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section Packs -->
<section class="packs-section" id="packs">
    <div class="container-fluid">
        <!-- Header -->
        <div class="section-header">
            <span class="section-badge">NOS OFFRES</span>
            <h3 class="section-title">Formules Premium</h3>
            <p class="section-subtitle">Des solutions sur mesure pour valoriser chaque moment important de votre entreprise</p>
            <p class="section-note">Carte de vœux personnalisée incluse</p>
        </div>

        <!-- Timeline -->
        <div class="timeline-wrapper">
            <div class="timeline-container">
                <div class="timeline-progress" id="timelineProgress"></div>
            </div>
        </div>

        <!-- Packs Grid -->
        <div class="packs-grid-wrapper">
            <div class="packs-row">
                <!-- Pack 1 -->
                <div class="pack-item" data-pack="1">
                    <div class="pack-card">
                        <div class="pack-header">
                            <div class="pack-tier">Essentiel</div>
                            <h5 class="pack-name">Classique</h5>
                            <div class="pack-price-box">
                                <div class="pack-price">34K</div>
                                <div class="pack-currency">FCFA</div>
                            </div>
                            <div class="pack-description">L'essentiel pour marquer l'occasion</div>
                        </div>
                        <div class="pack-content">
                            <ul class="pack-list">
                                <li><span class="number">1</span> Gâteau d'anniversaire</li>
                                <li><span class="number">2</span> Ambiance musicale</li>
                                <li><span class="number">3</span> Montre élégante</li>
                                <li class="highlight"><span class="number">4</span> Carte de vœux personnalisée</li>
                            </ul>
                        </div>
                        <button class="btn-choose">Sélectionner</button>
                    </div>
                </div>

                <!-- Pack 2 -->
                <div class="pack-item" data-pack="2">
                    <div class="pack-card">
                        <div class="pack-header">
                            <div class="pack-tier">Populaire</div>
                            <h5 class="pack-name">Élégance</h5>
                            <div class="pack-price-box">
                                <div class="pack-price">44K</div>
                                <div class="pack-currency">FCFA</div>
                            </div>
                            <div class="pack-description">Une touche de raffinement supplémentaire</div>
                        </div>
                        <div class="pack-content">
                            <ul class="pack-list">
                                <li><span class="number">1</span> Gâteau d'anniversaire</li>
                                <li><span class="number">2</span> Ambiance musicale</li>
                                <li><span class="number">3</span> Montre élégante</li>
                                <li><span class="number">4</span> Parfum de luxe</li>
                                <li class="highlight"><span class="number">5</span> Carte de vœux personnalisée</li>
                            </ul>
                        </div>
                        <button class="btn-choose">Sélectionner</button>
                    </div>
                </div>

                <!-- Pack 3 - Featured -->
                <div class="pack-item" data-pack="3">
                    <div class="pack-card featured">
                        <div class="pack-header">
                            <div class="pack-tier">Premium</div>
                            <h5 class="pack-name">Prestige</h5>
                            <div class="pack-price-box">
                                <div class="pack-price">54K</div>
                                <div class="pack-currency">FCFA</div>
                            </div>
                            <div class="pack-description">L'excellence pour les moments d'exception</div>
                        </div>
                        <div class="pack-content">
                            <ul class="pack-list">
                                <li><span class="number">1</span> Gâteau d'anniversaire</li>
                                <li><span class="number">2</span> Ambiance musicale</li>
                                <li><span class="number">3</span> Panier garni premium</li>
                                <li class="highlight"><span class="number">4</span> Carte de vœux personnalisée</li>
                            </ul>
                        </div>
                        <button class="btn-choose">Sélectionner</button>
                    </div>
                </div>

                <!-- Pack 4 -->
                <div class="pack-item" data-pack="4">
                    <div class="pack-card">
                        <div class="pack-header">
                            <div class="pack-tier">Luxe</div>
                            <h5 class="pack-name">Excellence</h5>
                            <div class="pack-price-box">
                                <div class="pack-price">64K</div>
                                <div class="pack-currency">FCFA</div>
                            </div>
                            <div class="pack-description">Une expérience mémorable complète</div>
                        </div>
                        <div class="pack-content">
                            <ul class="pack-list">
                                <li><span class="number">1</span> Gâteau d'anniversaire</li>
                                <li><span class="number">2</span> Ambiance musicale</li>
                                <li><span class="number">3</span> Panier garni premium</li>
                                <li><span class="number">4</span> Séance photo professionnelle</li>
                                <li class="highlight"><span class="number">5</span> Carte de vœux personnalisée</li>
                            </ul>
                        </div>
                        <button class="btn-choose">Sélectionner</button>
                    </div>
                </div>

                <!-- Pack 5 -->
                <div class="pack-item" data-pack="5">
                    <div class="pack-card">
                        <div class="pack-header">
                            <div class="pack-tier">VIP</div>
                            <h5 class="pack-name">Royal</h5>
                            <div class="pack-price-box">
                                <div class="pack-price">74K</div>
                                <div class="pack-currency">FCFA</div>
                            </div>
                            <div class="pack-description">Le summum du prestige et du raffinement</div>
                        </div>
                        <div class="pack-content">
                            <ul class="pack-list">
                                <li><span class="number">1</span> Gâteau d'anniversaire</li>
                                <li><span class="number">2</span> Ambiance musicale</li>
                                <li><span class="number">3</span> Panier garni premium</li>
                                <li><span class="number">4</span> Séance photo professionnelle</li>
                                <li><span class="number">5</span> Vin de prestige</li>
                                <li><span class="number">6</span> Parfum de luxe</li>
                                <li class="highlight"><span class="number">7</span> Carte de vœux personnalisée</li>
                            </ul>
                        </div>
                        <button class="btn-choose">Sélectionner</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Contact -->
<section class="contact-section"id="contact">
    <div class="container">
        <div class="row align-items-center">
            <!-- Colonne Gauche - Informations -->
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="contact-info">
                    <span class="contact-badge">CONTACTEZ-NOUS</span>
                    <h2 class="contact-title">Parlons de Votre Projet</h2>
                    <p class="contact-description">
                        Notre équipe est à votre écoute pour transformer vos moments spéciaux en expériences inoubliables.
                    </p>

                    <div class="info-cards">
                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Email</div>
                                <div class="info-value">maguipmadonna@gmail.com</div>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Téléphone</div>
                                <div class="info-value">+237 655 563 081</div>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Localisation</div>
                                <div class="info-value">Yaoundé, Cameroun</div>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 6v6l4 2"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Horaires</div>
                                <div class="info-value">Lun - Sam: 8h - 18h</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne Droite - Formulaire -->
            <div class="col-lg-7">
                <div class="contact-form-wrapper">
                    <form class="contact-form" id="contactForm">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">Sélectionnez un sujet</option>
                                        <option value="pack">Information sur les packs</option>
                                        <option value="devis">Demande de devis</option>
                                        <option value="reservation">Réservation</option>
                                        <option value="autre">Autre demande</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn-submit">
                                    <span class="btn-text">Envoyer le message</span>
                                    <span class="btn-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <line x1="22" y1="2" x2="11" y2="13"/>
                                            <path d="M22 2L15 22l-4-9-9-4z"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Message de succès -->
                    <div class="success-message" id="successMessage">
                        <div class="success-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                <path d="M22 4L12 14.01l-3-3"/>
                            </svg>
                        </div>
                        <div class="success-text">
                            <h4>Message envoyé avec succès !</h4>
                            <p>Nous vous répondrons dans les plus brefs délais.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
        <!-- Decorative Shapes -->
        <div class="footer-shape footer-shape-1"></div>
        <div class="footer-shape footer-shape-2"></div>

        <div class="footer-top">
            <div class="container">
                <div class="row g-4">
                    <!-- Colonne 1 - À propos -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-brand">
                            <h3>Ma Event Surprise</h3>
                            <p class="footer-description">
                                Créateurs de moments magiques et inoubliables. Nous transformons vos rêves en réalité depuis plus de 10 ans.
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="social-links">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="WhatsApp">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Colonne 2 - Liens Rapides -->
                    <div class="col-lg-2 col-md-6">
                        <h4 class="footer-title">Liens Rapides</h4>
                        <ul class="footer-links">
                            <li><a href="#Acceuil">Accueil</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#Propos">À propos</a></li>
                            <li><a href="#packs">Nos packs</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Colonne 3 - Services -->
                    <div class="col-lg-2 col-md-6">
                        <h4 class="footer-title">Services</h4>
                        <ul class="footer-links">
                            <li><a href="#">Mariages</a></li>
                            <li><a href="#">Anniversaires</a></li>
                            <li><a href="#">Événements Pro</a></li>
                            <li><a href="#">Galas</a></li>
                            <li><a href="#">Team Building</a></li>
                        </ul>
                    </div>

                    <!-- Colonne 4 - Contact & Newsletter -->
                    <div class="col-lg-4 col-md-6">
                        <h4 class="footer-title">Contact</h4>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="contact-content">
                                <h5>Adresse</h5>
                                <p>Yaoundé, Cameroun</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="contact-content">
                                <h5>Email</h5>
                                <p>maguipmadonna@gmail.com</p>
                            </div>
                        </div>

                        <h5 style="color: white; margin-top: 32px; margin-bottom: 12px; font-size: 1rem;">Newsletter</h5>
                        <p style="color: rgba(255, 255, 255, 0.85); font-size: 0.9rem; margin-bottom: 16px;">
                            Restez informés de nos offres
                        </p>
                        <form class="newsletter-form">
                            <input type="email" class="newsletter-input" placeholder="Votre email" required>
                            <button type="submit" class="newsletter-btn">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <p>
                    &copy; 2025 <a href="#">Ma Event Surprise</a>. Tous droits réservés.
                    Créé avec amour au Cameroun
                </p>
            </div>
        </div>
    </footer>
    <!-- Scripts Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script>
// Animation de la timeline au scroll
window.addEventListener('scroll', function() {
    const packsSection = document.querySelector('.packs-section');
    const timelineProgress = document.getElementById('timelineProgress');

    if (packsSection && timelineProgress) {
        const sectionTop = packsSection.offsetTop;
        const sectionHeight = packsSection.offsetHeight;
        const scrollPosition = window.scrollY + window.innerHeight / 2;

        if (scrollPosition > sectionTop) {
            const scrollInSection = scrollPosition - sectionTop;
            const percentComplete = Math.min((scrollInSection / sectionHeight) * 100, 100);
            timelineProgress.style.width = percentComplete + '%';
        } else {
            timelineProgress.style.width = '0%';
        }
    }
});

// Effet de clic sur les boutons
document.querySelectorAll('.btn-choose').forEach(button => {
    button.addEventListener('click', function() {
        // Ajoutez votre logique ici
        console.log('Pack sélectionné');
    });
});
</script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Récupérer les données du formulaire
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Désactiver le bouton pendant l'envoi
            const submitBtn = this.querySelector('.btn-submit');
            const btnText = submitBtn.querySelector('.btn-text');
            const originalText = btnText.textContent;
            btnText.textContent = 'Envoi en cours...';
            submitBtn.disabled = true;

            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (result.success) {
                    // Afficher le message de succès
                    successMessage.classList.add('show');

                    // Réinitialiser le formulaire
                    contactForm.reset();

                    // Cacher le message après 5 secondes
                    setTimeout(() => {
                        successMessage.classList.remove('show');
                    }, 5000);
                } else {
                    alert('Une erreur est survenue. Veuillez réessayer.');
                }
            } catch (error) {
                alert('Erreur de connexion. Veuillez vérifier votre connexion internet.');
                console.error('Erreur:', error);
            } finally {
                // Réactiver le bouton
                btnText.textContent = originalText;
                submitBtn.disabled = false;
            }
        });
    }
});
<script>
        // Newsletter form
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            alert('Merci pour votre inscription ! Nous vous enverrons nos meilleures offres.');
            this.reset();
        });
    </script>
</body>
</html>
