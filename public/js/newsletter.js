/**
 * Gestion du formulaire de newsletter
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        const newsletterForm = document.querySelector('.newsletter-form');

        if (!newsletterForm) {
            return;
        }

        newsletterForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput ? emailInput.value.trim() : '';

            if (!email) {
                alert('Veuillez entrer une adresse email valide.');
                return;
            }

            // Désactiver le bouton pendant l'envoi
            const submitBtn = this.querySelector('.newsletter-btn');
            const originalText = submitBtn ? submitBtn.textContent : '';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Inscription...';
            }

            try {
                // TODO: Implémenter l'endpoint API pour la newsletter
                // Pour l'instant, on simule juste une inscription réussie
                await new Promise(resolve => setTimeout(resolve, 500));

                alert('Merci pour votre inscription ! Nous vous enverrons nos meilleures offres.');
                this.reset();
            } catch (error) {
                console.error('Erreur lors de l\'inscription à la newsletter:', error);
                alert('Une erreur est survenue. Veuillez réessayer plus tard.');
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }
            }
        });
    });
})();

