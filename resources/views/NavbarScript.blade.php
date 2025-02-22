<script>
    document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerButton.addEventListener('click', function () {
        const isHidden = mobileMenu.classList.contains('hidden');

        if (isHidden) {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.classList.remove('opacity-0', 'scale-95');
                mobileMenu.classList.add('opacity-100', 'scale-100');
            }, 10); // Pequeno atraso para garantir que o browser registre a transição
        } else {
            mobileMenu.classList.remove('opacity-100', 'scale-100');
            mobileMenu.classList.add('opacity-0', 'scale-95');

            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }

        const isExpanded = hamburgerButton.getAttribute('aria-expanded') === 'true';
        hamburgerButton.setAttribute('aria-expanded', !isExpanded);
    });
});

</script>

{-- DROPDOWN BUTTON COMPONENT --}
<script>
    document.getElementById('options-menu').addEventListener('click', function() {
        const dropdown = document.getElementById('dropdown-menu');
        dropdown.classList.toggle('hidden');
    });

    window.addEventListener('click', function(event) {
        const dropdown = document.getElementById('dropdown-menu');
        if (!event.target.closest('.relative')) {
            dropdown.classList.add('hidden');
        }
    });
</script>