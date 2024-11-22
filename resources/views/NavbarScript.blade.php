<script>
    document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerButton.addEventListener('click', function () {
        // Verifica se o menu está oculto
        const isHidden = mobileMenu.classList.contains('hidden');

        if (isHidden) {
            // Remove o estado oculto e ativa as animações de abertura
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.classList.remove('opacity-0', 'scale-95');
                mobileMenu.classList.add('opacity-100', 'scale-100');
            }, 10); // Pequeno atraso para garantir que o browser registre a transição
        } else {
            // Ativa as animações de fechamento
            mobileMenu.classList.remove('opacity-100', 'scale-100');
            mobileMenu.classList.add('opacity-0', 'scale-95');

            // Esconde o menu após a animação
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300); // Tempo correspondente à duração da animação
        }

        // Alterna o atributo aria-expanded
        const isExpanded = hamburgerButton.getAttribute('aria-expanded') === 'true';
        hamburgerButton.setAttribute('aria-expanded', !isExpanded);
    });
});

</script>