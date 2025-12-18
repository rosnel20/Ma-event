/**
 * Animation de la timeline des packs au scroll
 */
(function() {
    'use strict';

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

    // Effet de clic sur les boutons de sélection de pack
    document.querySelectorAll('.btn-choose').forEach(button => {
        button.addEventListener('click', function() {
            const packItem = this.closest('.pack-item');
            const packNumber = packItem ? packItem.dataset.pack : null;
            
            if (packNumber) {
                // Scroll vers le formulaire de contact avec le pack présélectionné
                const contactSection = document.getElementById('contact');
                if (contactSection) {
                    // Préremplir le sujet dans le formulaire
                    const subjectSelect = document.getElementById('subject');
                    if (subjectSelect) {
                        subjectSelect.value = 'pack';
                    }
                    
                    // Scroll vers le formulaire
                    contactSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    
                    // Focus sur le premier champ du formulaire
                    setTimeout(() => {
                        const firstNameInput = document.getElementById('firstName');
                        if (firstNameInput) {
                            firstNameInput.focus();
                        }
                    }, 500);
                }
            }
        });
    });
})();

