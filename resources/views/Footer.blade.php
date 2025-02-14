<footer class="dark:bg-slate-900 mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8 min-h-16 mt-6" aria-labelledby="footer-heading">
    <div class="flex flex-col sm:flex-row items-center justify-between">
        <img class="w-auto h-8 sm:h-10 hidden sm:block" src="{{ asset('img/logo-no-bg.png') }}" loading="lazy" width="200" height="40" alt="Logo">
        <div class="flex space-x-4 text-md text-gray-600 dark:text-gray-300 justify-center mt-4 sm:mt-0">
            <a class='hover:underline' href="{{ route('home') }}" wire:navigate>Home</a>
            <a class='hover:underline' href="{{ route('sobre') }}" wire:navigate>Sobre</a>
            <a class='hover:underline' href="{{ route('servicos') }}" wire:navigate>Serviços</a>
            <a class='hover:underline' href="{{ route('contato') }}" wire:navigate>Contato</a>
            <a class='hover:underline' href="{{ route('posts') }}" wire:navigate>Posts</a>
        </div>
    </div>
</footer>
