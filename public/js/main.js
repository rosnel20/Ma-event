/**
 * Script principal - Ma Event Surprise
 * Améliorations UX et interactions
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        initNavbar();
        initSmoothScroll();
        initAnimations();
        initPackSelection();
    });

    /**
     * Initialise la navbar avec effet de scroll
     */
    function initNavbar() {
        const navbar = document.getElementById('navbar');
        if (!navbar) return;

        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });

        // Active le lien de navigation correspondant à la section visible
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link-modern');

        window.addEventListener('scroll', function() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    }

    /**
     * Initialise le smooth scroll pour les liens d'ancrage
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;
                
                e.preventDefault();
                const target = document.querySelector(href);
                
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Compenser la navbar fixe
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Initialise les animations au scroll
     */
    function initAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observer les éléments à animer
        document.querySelectorAll('.service-card-modern, .pack-card-modern, .contact-info-card-modern').forEach(el => {
            observer.observe(el);
        });
    }

    /**
     * Initialise la sélection de pack
     */
    function initPackSelection() {
        document.querySelectorAll('.pack-button-modern').forEach(button => {
            button.addEventListener('click', function() {
                const packCard = this.closest('.pack-card-modern');
                const packName = packCard.querySelector('.pack-name-modern')?.textContent || 'Pack';
                
                // Scroll vers le formulaire de contact
                const contactSection = document.getElementById('contact');
                if (contactSection) {
                    // Préremplir le sujet
                    const subjectSelect = document.getElementById('subject');
                    if (subjectSelect) {
                        subjectSelect.value = 'pack';
                    }
                    
                    // Scroll vers le formulaire
                    const offsetTop = contactSection.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    
                    // Focus sur le premier champ après le scroll
                    setTimeout(() => {
                        const firstNameInput = document.getElementById('firstName');
                        if (firstNameInput) {
                            firstNameInput.focus();
                        }
                    }, 600);
                }
            });
        });
    }

    /**
     * Égalise les hauteurs de toutes les cards de packs
     */
    function equalizePackCardsHeight() {
        const packCards = document.querySelectorAll('.pack-card-modern');
        if (packCards.length === 0) return;

        // Réinitialiser les hauteurs pour mesurer correctement
        packCards.forEach(card => {
            card.style.height = 'auto';
        });

        // Trouver la hauteur maximale
        let maxHeight = 0;
        packCards.forEach(card => {
            const cardHeight = card.offsetHeight;
            if (cardHeight > maxHeight) {
                maxHeight = cardHeight;
            }
        });

        // Appliquer la hauteur maximale à toutes les cards
        if (maxHeight > 0) {
            packCards.forEach(card => {
                card.style.height = maxHeight + 'px';
            });
        }
    }

    // Égaliser les hauteurs au chargement et au redimensionnement
    window.addEventListener('load', equalizePackCardsHeight);
    window.addEventListener('resize', equalizePackCardsHeight);
    
    // Égaliser après un court délai pour s'assurer que les images sont chargées
    setTimeout(equalizePackCardsHeight, 100);
    setTimeout(equalizePackCardsHeight, 500);
})();

