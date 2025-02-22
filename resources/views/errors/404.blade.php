@extends ('Layout')

@section ('content')

<div class="w-full h-screen flex items-center justify-center">
    <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-500 flex flex-col items-center justify-center px-6 md:px-10 lg:px-16 py-10 rounded-lg shadow-2xl">
        <p class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-gray-300 dark:text-white">
            404
        </p>
        <p class="text-2xl md:text-3xl lg:text-5xl font-bold tracking-wider text-gray-700 dark:text-white mt-4">
            Página não encontrada
        </p>
        <p class="text-lg text-gray-500 dark:text-gray-400 mt-4 text-center">
            A página que você está procurando não foi encontrada.
        </p>
        <div class='mt-6'>
            <x-button link='/' content='Voltar' class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-300" />
        </div>
    </div>
</div>

@endsection
