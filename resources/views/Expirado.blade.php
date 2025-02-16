@extends('Layout')

@section('content')

<div class="flex items-center justify-center h-screen">
    <div class="bg-white dark:bg-slate-800 p-8 rounded shadow-md text-center transition-transform transform hover:scale-105">
        <h1 class="text-3xl font-bold text-red-500 dark:text-white mb-4">Arquivo Expirado</h1>
        <p class="text-gray-700 dark:text-gray-400">O arquivo que você está tentando acessar expirou.</p>
    </div>
</div>

@endsection