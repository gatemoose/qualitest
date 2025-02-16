<div class="relative inline-block text-left">
    <div>
        <button type="button" class="inline-flex justify-center w-full px-4 py-2 text-md text-black dark:text-white border border-black dark:border-gray-600 rounded-sm bg-transparent hover:bg-neutral-200 dark:hover:bg-slate-700 transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black dark:focus:ring-gray-600" id="options-menu" aria-haspopup="true" aria-expanded="true">

            {{ auth()->guard('clients')->check() ? 'Olá, ' . auth()->guard('clients')->user()->name : 'Menu' }}

            <svg class="-mr-1 pt-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Dropdown menu -->



    <div class="absolute right-0 z-10 mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="options-menu" id="dropdown-menu">
        <div class="py-1">
            <a href="{{ route('docs') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" role="menuitem" wire:navigate>Meus Documentos</a>
            <form action="{{ route('clientLogout') }}" method="POST">
                @csrf
                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700" role="menuitem" wire:navigate>Sair</button>
            </form>
        </div>
    </div>
</div>