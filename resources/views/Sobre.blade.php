@extends('Layout')

@section('content')

{-- SESSÃO 1 --}
<div class="flex flex-wrap items-center mt-12 px-4 sm:px-8 md:px-10 lg:px-12">
    <div class="w-full md:w-3/5 lg:w-1/2 px-4">
        <img src="{{ asset('img/sondagem.jpg') }}" alt="Membros da Equipe Qualitest em trabalho." class="inline-block rounded shadow-lg w-full">
    </div>
    <div class="w-full md:w-2/5 lg:w-1/2 px-4 dark:text-neutral-50 lg:pl-12">
        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
            Um pouco da nossa história...
        </h3>
        <p class="mt-6 font-normal text-gray-600 dark:text-gray-300 md:text-lg lg:text-xl">
            {!! $about['history'] ?? 'undefined' !!}
        </p>
    </div>
</div>

{-- SESSÃO 2 --}
<section class="dark:bg-slate-900 pt-10">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-8 grid grid-cols-1 gap-16 sm:grid-cols-2 lg:grid-cols-3">
            <div class="md:text-center sm:text-base">
                <div class="flex items-center justify-center mb-2">
                    <div class="h-12 w-12 rounded-md bg-transparent text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 dark:text-gray-300 mr-6">
                        Missão
                    </h3>
                </div>
                <p class="mt-2 font-normal text-gray-600 dark:text-gray-300 md:text-lg lg:text-xl px-4 md:px-0">
                    {!! strip_tags($about['mission'] ?? 'undefined', ['em', 'del', 'span', 'strong']) !!}
                </p>
            </div>
            <div class="md:text-center sm:text-base">
                <div class="flex items-center justify-center mb-2">
                    <div class="h-12 w-12 rounded-md bg-transparent text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 dark:text-gray-300 mr-6">
                        Valores
                    </h3>
                </div>
                <p class="mt-2 font-normal text-gray-600 dark:text-gray-300 md:text-lg lg:text-xl px-4 md:px-0">
                    {!! strip_tags($about['values'] ?? 'undefined', ['em', 'del', 'span', 'strong']) !!}
                </p>
            </div>
            <div class="md:text-center sm:text-base">
                <div class="flex items-center justify-center mb-2">
                    <div class="h-12 w-12 rounded-md bg-transparent text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 dark:text-gray-300 mr-6">
                        Visão
                    </h3>
                </div>
                <p class="mt-2 font-normal text-gray-600 dark:text-gray-300 md:text-lg lg:text-xl 
                 px-4 md:px-0">
                    {!! strip_tags($about['vision'] ?? 'undefined', ['em', 'del', 'span', 'strong']) !!}
                </p>
            </div>
        </div>
    </div>
</section>

{-- SESSÃO 3 --}
<section class="pt-10 pb-10 overflow-hidden dark:bg-slate-900 sm:pt-16 2xl:pt-16">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 md:grid-cols-2 px-4">

            <div>
                <h2 class="text-2xl font-bold leading-tight text-black dark:text-white">
                    Edilene Patrícia da Silva Oliveira
                </h2>
                <p class="max-w-lg mt-3 font-normal text-gray-600 dark:text-gray-300 md:mt-8 md:text-lg lg:text-xl mb-3 md:mb-8">
                    {!! strip_tags($about['patricia'] ?? 'undefined', ['em', 'del', 'span', 'strong']) !!}
                </p>
            </div>

            <div class="relative">
                <img class="relative rounded w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="{{ asset('img/edilene.jpg') }}" alt="Edilene Patrícia da Silva Oliveira" />
            </div>
        </div>

        <div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8 font-normal text-gray-600 dark:text-gray-300">
            <style>
                ul {
                    list-style-type: disc;
                };
            </style>
            <div>
            <h3 class="text-xl font-bold leading-tight dark:text-white column-span-3">
                Atuação Profissional
            </h3>
            {!! $about['additional_qualifications'] ?? 'undefined' !!}
            </div>
            <div>
                <h3 class="text-xl font-bold leading-tight dark:text-white">
                    Qualificação Complementar
                </h3>
                {!! $about['professional_experience'] ?? 'undefined' !!}
            </div>
        </div>
    </div>
</section>

@endsection