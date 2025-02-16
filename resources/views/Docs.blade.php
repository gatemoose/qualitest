@extends('Layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-8 text-center">Meus Documentos</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($docs as $doc)
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded p-6 transition-transform transform hover:scale-105">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $doc->title }}</h2>

                @if ($doc->expiration_date < now())
                    <p class="text-red-500 font-bold mb-4">Este documento expirou em {{ $doc->expiration_date->format("d/m/Y") }}.</p>
                @else
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Este documento expira em: <span class="font-semibold">{{ $doc->expiration_date->format('d/m/Y') }}</span>.</p>
                    <div class="mt-auto flex justify-end">
                        <x-button link="{{ $doc->link }}" content="Baixar" />
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection