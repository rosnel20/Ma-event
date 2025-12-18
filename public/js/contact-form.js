/**
 * Gestion du formulaire de contact
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const successMessage = document.getElementById('successMessage');

        if (!contactForm) {
            return;
        }

        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Récupérer les données du formulaire et mapper vers les noms attendus par le serveur
            const formData = {
                first_name: document.getElementById('firstName').value.trim(),
                last_name: document.getElementById('lastName').value.trim(),
                email: document.getElementById('email').value.trim(),
                phone: document.getElementById('phone').value.trim(),
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value.trim()
            };

            // Validation côté client basique
            if (!validateForm(formData)) {
                return;
            }

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
                    body: JSON.stringify(formData)
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    // Afficher le message de succès
                    if (successMessage) {
                        successMessage.classList.add('show');
                    }

                    // Réinitialiser le formulaire
                    contactForm.reset();

                    // Scroll vers le message de succès
                    if (successMessage) {
                        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }

                    // Cacher le message après 5 secondes
                    setTimeout(() => {
                        if (successMessage) {
                            successMessage.classList.remove('show');
                        }
                    }, 5000);
                } else {
                    // Afficher les erreurs de validation
                    displayValidationErrors(result.errors || {});
                    showError(result.message || 'Une erreur est survenue. Veuillez réessayer.');
                }
            } catch (error) {
                console.error('Erreur:', error);
                showError('Erreur de connexion. Veuillez vérifier votre connexion internet.');
            } finally {
                // Réactiver le bouton
                btnText.textContent = originalText;
                submitBtn.disabled = false;
            }
        });

        /**
         * Valide le formulaire côté client
         */
        function validateForm(data) {
            const errors = [];

            if (!data.first_name) {
                errors.push('Le prénom est obligatoire.');
            }

            if (!data.last_name) {
                errors.push('Le nom est obligatoire.');
            }

            if (!data.email) {
                errors.push('L\'email est obligatoire.');
            } else if (!isValidEmail(data.email)) {
                errors.push('L\'email n\'est pas valide.');
            }

            if (!data.phone) {
                errors.push('Le téléphone est obligatoire.');
            }

            if (!data.subject) {
                errors.push('Le sujet est obligatoire.');
            }

            if (!data.message) {
                errors.push('Le message est obligatoire.');
            }

            if (errors.length > 0) {
                showError(errors.join('\n'));
                return false;
            }

            return true;
        }

        /**
         * Valide le format d'email
         */
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        /**
         * Affiche les erreurs de validation
         */
        function displayValidationErrors(errors) {
            // Réinitialiser les erreurs précédentes
            document.querySelectorAll('.form-control.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });
            document.querySelectorAll('.invalid-feedback').forEach(el => {
                el.remove();
            });

            // Afficher les nouvelles erreurs
            Object.keys(errors).forEach(field => {
                const fieldName = field.replace('_', '');
                const input = document.getElementById(fieldName.charAt(0).toLowerCase() + fieldName.slice(1)) ||
                             document.getElementById(field);
                
                if (input) {
                    input.classList.add('is-invalid');
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'invalid-feedback';
                    errorDiv.textContent = Array.isArray(errors[field]) ? errors[field][0] : errors[field];
                    input.parentNode.appendChild(errorDiv);
                }
            });
        }

        /**
         * Affiche un message d'erreur
         */
        function showError(message) {
            // Créer ou mettre à jour un élément d'alerte
            let alertDiv = document.getElementById('errorAlert');
            if (!alertDiv) {
                alertDiv = document.createElement('div');
                alertDiv.id = 'errorAlert';
                alertDiv.className = 'alert alert-danger alert-dismissible fade show';
                alertDiv.setAttribute('role', 'alert');
                alertDiv.style.marginTop = '20px';
                contactForm.insertBefore(alertDiv, contactForm.firstChild);
            }

            alertDiv.innerHTML = `
                <strong>Erreur :</strong> ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;

            alertDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });

            // Supprimer l'alerte après 5 secondes
            setTimeout(() => {
                if (alertDiv) {
                    alertDiv.remove();
                }
            }, 5000);
        }
    });
})();

