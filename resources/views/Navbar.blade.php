<div class="bg-neutral-50 px-4 mx-auto sm:px-6 dark:bg-slate-900">
    <div class="relative pt-6 pb-16 sm:pb-6">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                        <span class="sr-only">Qualitest Engenharia</span>
                        <img class="w-auto h-8 sm:h-10" src="img/logo.png" loading="lazy" width="200" height="40">
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
                    <a href="/" class="text-lg font-normal text-gray-700 hover:text-black hover:underline dark:text-gray-100 dark:hover:text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/quem-somos" class="text-lg font-normal text-gray-500 hover:underline dark:text-gray-500 dark:hover:text-white">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="/nossos-servicos" class="text-lg font-normal text-gray-500 hover:underline dark:text-gray-500 dark:hover:text-white">
                        Serviços
                    </a>
                </li>
                <li>
                    <a href="/fale-conosco" class="text-lg font-normal text-gray-500 hover:underline dark:text-gray-500 dark:hover:text-white">
                        Contato
                    </a>
                </li>
                <li>
                    <a href="/posts" class="text-lg font-normal text-gray-500 hover:underline dark:text-gray-500 dark:hover:text-white">
                        Posts
                    </a>
                </li>
            </div>
            <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                <div class="inline-flex rounded-sm shadow">
                    <x-button link='/login' content='Já sou cliente ➞' />
                </div>
            </div>
        </nav>
        <div id="mobile-menu" class="hidden flex-col md:hidden">
            <ul class="space-y-2 text-end transition-all duration-150 ease-in-out">
                <li>
                    <a href="/" class="block text-lg font-normal text-gray-500 hover:text-gray-950 hover:underline dark:text-gray-100 dark:hover:text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/quem-somos" class="block text-lg font-normal text-gray-500 hover:text-black hover:underline dark:text-gray-500 dark:hover:text-white">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="/nossos-servicos" class="block text-lg font-normal text-gray-500 hover:text-black hover:underline dark:text-gray-500 dark:hover:text-white">
                        Serviços
                    </a>
                </li>
                <li>
                    <a href="/fale-conosco" class="block text-lg font-normal text-gray-500 hover:text-black hover:underline dark:text-gray-500 dark:hover:text-white">
                        Contato
                    </a>
                </li>
                <li>
                    <a href="/posts" class="text-lg font-normal text-gray-500 hover:underline dark:text-gray-500 dark:hover:text-white">
                        Posts
                    </a>
                </li>
                <li>
                    <a href="/login" class="text-lg font-normal text-gray-500 hover:underline dark:text-gray-500 dark:hover:text-white">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>