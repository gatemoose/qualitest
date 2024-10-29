<script>
// Funcionalidade dos botões no celular.
document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerButton.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
        
        const isExpanded = hamburgerButton.getAttribute('aria-expanded') === 'true' || false;
        hamburgerButton.setAttribute('aria-expanded', !isExpanded);
    });
});
</script>

