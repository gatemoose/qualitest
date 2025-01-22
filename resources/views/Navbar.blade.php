<div class="bg-neutral-50 px-4 mx-auto sm:px-8 dark:bg-slate-900">
    <div class="relative pt-6 pb-6 sm:pb-3">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="/" wire:navigate>
                        <span class="sr-only">Qualitest Engenharia</span>
                        <img class="w-auto h-8 sm:h-10" src="{{ asset('img/logo-no-bg.png') }}" loading="lazy" width="200" height="40">
                    </a>
                    <div class="flex items-center -mr-2 md:hidden">
                        <button id="hamburger-button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-gray-50 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-50 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-900 dark:hover:text-white" type="button" aria-expanded="false">
                            <span class="sr-only">Abrir menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="nav-menu" class="hidden md:flex md:space-x-10 list-none">
                <li>
                    <a href="/" class="text-lg font-normal hover:text-black hover:underline text-gray-600 dark:text-gray-400 dark:hover:text-white" wire:navigate>
                        Home
                    </a>
                </li>
                <li>
                    <a href="/sobre" class="text-lg font-normal hover:underline text-gray-600 dark:text-gray-400 dark:hover:text-white" wire:navigate>
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="/servicos" class="text-lg font-normal hover:underline text-gray-600 dark:text-gray-400 dark:hover:text-white" wire:navigate>
                        Serviços
                    </a>
                </li>
                <li>
                    <a href="/contato" class="text-lg font-normal hover:underline text-gray-600 dark:text-gray-400 dark:hover:text-white" wire:navigate>
                        Contato
                    </a>
                </li>
                <li>
                    <a href="/posts" class="text-lg font-normal hover:underline text-gray-600 dark:text-gray-400 dark:hover:text-white" wire:navigate>
                        Posts
                    </a>
                </li>
            </div>
            <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                <div class="inline-flex rounded-sm shadow">
                    <x-button link='/login' content='Entrar' />
                </div>
            </div>
        </nav>
        
        <div id="mobile-menu" class="hidden flex-col md:hidden transform transition-transform scale-95 opacity-0 duration-300 ease-in-out">
            <ul class="space-y-2 text-end">
                <li>
                    <a href="/sobre" class="block text-lg font-normal hover:underline text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white" wire:navigate>
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="/servicos" class="block text-lg font-normal text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white hover:underline" wire:navigate>
                        Serviços
                    </a>
                </li>
                <li>
                    <a href="/contato" class="block text-lg font-normal text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white hover:underline" wire:navigate>
                        Contato
                    </a>
                </li>
                <li>
                    <a href="/posts" class="block text-lg font-normal text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white hover:underline" wire:navigate>
                        Posts
                    </a>
                </li>
                <li>
                    <a href="/login" class="block text-lg font-normal text-gray-600 dark:text-gray-400 hover:text-black dark:hover:text-white hover:underline" wire:navigate>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>