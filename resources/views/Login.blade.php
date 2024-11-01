@extends('Layout')

@section('content')

<!-- SESSÃO 1. -->
<div class="flex items-center justify-center dark:bg-gray-900 px-4 sm:px-6 lg:px-8">
    <div class="relative py-3 sm:max-w-xs sm:mx-auto">
        <div class="min-h-96 px-8 py-6 text-left bg-white dark:bg-gray-900 rounded-xl shadow-lg">
            <div class="flex flex-col justify-center items-center h-full">
                <div class="flex flex-col items-center justify-center gap-2 mb-8">
                    <a href="/" target="_blank">
                        <img src="img/logo.png" class="w-32" />
                    </a>
                    <p class="m-0 text-xl font-semibold dark:text-white">Entre na sua conta</p>
                    <span class="m-0 text-sm max-w-[90%] text-center text-[#8B8E98]">
                        E tenha acesso a documentos dos seus processos.
                    </span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="font-semibold text-xs text-gray-400">Identificador</label>
                    <input class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none dark:border-gray-500 dark:bg-gray-900 dark:text-gray-300" placeholder="nome@empresa" />
                </div>
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="font-semibold text-xs text-gray-400">Senha</label>
                <input type="password" class="border rounded-lg px-3 py-2 mb-5 text-sm w-full outline-none dark:border-gray-500 dark:bg-gray-900 dark:text-gray-300" placeholder="••••••••" />
            </div>
            <div class="mt-5">
                <a href='/admin'>
                    <button class="py-1 px-8 bg-neutral-50 dark:bg-transparent hover:bg-neutral-100 text-gray-900 dark:text-gray-100 w-full transition ease-in duration-150 text-center text-base font-semibold shadow-md rounded cursor-pointer select-none border border-gray-500 dark:border-gray-700 dark:hover:bg-gray-700">
                        Entrar
                    </button>
                </a>
            </div>
            <div class="text-md text-center dark:text-gray-300 mt-5 cursor-pointer hover:underline">
                <a href="">
                    Esqueci a senha
                </a>
            </div>
        </div>
    </div>
</div>

@stop