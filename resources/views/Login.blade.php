@extends('Layout')

@section('content')

<!-- SESSÃO 1. -->
<div class="flex items-center justify-center dark:bg-slate-900 px-4 sm:px-6 lg:px-8">
    <div class="relative py-3 sm:max-w-xs sm:mx-auto">
        <div class="min-h-96 px-8 py-6 text-left bg-white dark:bg-slate-900 rounded-xl shadow-lg">
            <form method='post' action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col justify-center items-center h-full">
                    <div class="flex flex-col items-center justify-center gap-2 mb-8">
                        <a href="{{ route('home') }}" target="_blank" wire:navigate>
                            <img src="{{ asset('img/logo.png') }}" class="w-32" />
                        </a>
                        <p class="m-0 text-xl font-semibold dark:text-white">Entre na sua conta</p>
                        <span class="m-0 text-sm max-w-[90%] text-center text-slate-500">
                            E tenha acesso a documentos dos seus processos.
                        </span>
                        @foreach($errors->all() as $error)
                            <p class="text-red-500 text-center text-sm">{{ $error }}</p>
                        @endforeach
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="font-semibold text-xs text-slate-400">Email</label>
                        <input name='email' class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none dark:border-gray-500 dark:bg-slate-900 dark:text-gray-300" placeholder="nome@empresa.com" value='{{ old("email") }}' />
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="font-semibold text-xs text-slate-400">Senha</label>
                    <input name='password' type="password" class="border rounded-lg px-3 py-3 text-sm w-full outline-none dark:border-gray-500 dark:bg-slate-900 dark:text-gray-300" placeholder="••••••••" />
                </div>
                <div class="mt-7 pt-3">
                    <button type='submit' class="py-1 px-8 bg-neutral-50 dark:bg-transparent hover:bg-neutral-100 text-gray-900 dark:text-gray-100 w-full transition ease-in duration-150 text-center text-base font-semibold shadow-md rounded cursor-pointer select-none border border-gray-500 dark:border-gray-700 dark:hover:bg-gray-700">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection