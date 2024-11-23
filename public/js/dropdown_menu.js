document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.dropdown'); // Sélectionne tous les menus déroulants

    dropdowns.forEach(dropdown => {
        const menu = dropdown.querySelector('.dropdown-menu');

        // Masquer le sous-menu au chargement de la page
        menu.style.display = 'none';

        // Afficher le sous-menu au survol
        dropdown.addEventListener('mouseenter', () => {
            menu.style.display = 'block';
        });

        // Cacher le sous-menu lorsque la souris quitte la zone
        dropdown.addEventListener('mouseleave', () => {
            menu.style.display = 'none';
        });
    });
});
