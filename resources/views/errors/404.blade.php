@extends ('Layout')

@section ('content')

<div class="bg-white dark:bg-gray-900 w-full px-16 md:px-0 h-screen flex items-center justify-center">
    <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-500 flex flex-col items-center justify-center px-4 md:px-8 lg:px-24 py-8 rounded-lg shadow-2xl">
        <p class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-gray-300 dark:text-white">
            404
        </p>
        <p class="text-2xl md:text-3xl lg:text-5xl font-bold tracking-wider text-gray-700 dark:text-white mt-4">
            Página não encontrada
        </p>
        <p class="text-lg text-gray-500 dark:text-gray-400 mt-4 text-center">
            A página que você está procurando não foi encontrada.
        </p>
        <div class='mt-4'>
            <x-button link='/home' content='Voltar para a Home' />
        </div>
    </div>
</div>

@endsection