@extends('Layout')

@section('content')

<!-- SESSÃO 1. -->
<section class="bg-white dark:bg-slate-900">
    <div class="grid px-6 pt-12 pb-8 mx-auto gap-6 lg:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-20">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-4xl lg:text-5xl xl:text-6xl dark:text-white">
                Qualitest Engenharia
            </h1>
            <p class="max-w-3xl mb-6 font-normal text-gray-600 dark:text-gray-300 lg:mb-8 md:text-lg lg:text-xl lg:pr-4">
                A Qualitest Engenharia é uma empresa líder em sondagens SPT e controle tecnológico de concreto. Especializada em fornecer dados precisos sobre a composição do solo e garantir a qualidade dos materiais de construção, a Qualitest assegura a excelência e a segurança dos projetos civis. Com uma equipe altamente qualificada e tecnologia de ponta, a empresa se destaca pela confiabilidade e precisão em todos os seus serviços.
            </p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <div class="flex justify-start gap-4">
                    <x-button link='/sobre' content='Saiba mais' px='5' py='3' />
                    <x-button link='/contato' content='Entrar em contato' px='5' py='3' />
                </div>
                <div>
                    <h3 class="font-normal text-gray-600 md:text-lg lg:text-xl dark:text-gray-300">
                        Já é cliente?
                    </h3>
                    <a href='/login' wire:navigate>
                        <h3 class="hover:underline dark:hover:text-white text-gray-500 md:text-lg lg:text-xl dark:text-gray-300">
                            Faça login clicando aqui!
                        </h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex w-auto h-auto">
            <img src="img/quem-somos.jpg" alt="Capa" class='rounded-md w-full h-auto'>
        </div>
    </div>
</section>


<!-- SESSÃO 2. -->
<div class="mx-auto p-6 dark:bg-slate-900">
    <div class="flex flex-wrap items-center mt-6 text-left">
        <div class="w-full md:w-3/5 lg:w-1/2">
            <img src="img/ensaio-1.jpg" alt="Imagem" class="md:size-3/4 lg:size-full inline-block rounded shadow-lg">
        </div>
        <div class="w-full md:w-2/5 lg:w-1/2 dark:text-neutral-50 md:text-left lg:pl-12">
            <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                Por que a <span class='text-orange-500'>Qualitest</span>?
            </h3>
            <p class="sm:text-lg mt-6 font-normal text-gray-600 dark:text-gray-300">
                Escolher a nossa empresa significa optar por inovação e expertise no controle de qualidade de concreto e ensaios relacionados. Contamos com uma equipe altamente qualificada, cujos anos de experiência no setor de obras civis garantem resultados confiáveis e precisos. Nossa abordagem é focada na excelência e na melhoria contínua, oferecendo soluções que não apenas atendem, mas superam as expectativas dos nossos clientes. Com a gente, você tem a certeza de que seus projetos estarão sempre em boas mãos.
            </p>
        </div>
    </div>

    <div class="flex flex-wrap items-center mt-10">
        <div class="w-full md:w-3/5 lg:w-1/2">
            <img src="img/carac.jpg" alt="Imagem" class="md:size-3/4 lg:size-full inline-block rounded shadow-lg">
        </div>
        <div class="w-full md:w-2/5 lg:w-1/2 md:order-first dark:text-white md:text-left lg:pr-12">
            <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                Quais são nossos <span class="text-sky-500">valores</span>?
            </h3>
            <p class="sm:text-lg mt-6 font-normal text-gray-600 dark:text-gray-300">
                Nossos valores são centrados em atender às necessidades e expectativas dos clientes, garantindo resultados excepcionais e pareceres técnicos precisos. Comprometemo-nos a cumprir prazos acordados e a assegurar a qualidade dos materiais utilizados na construção civil, sempre mantendo a integridade e a transparência em nossos serviços.
            </p>
        </div>
    </div>
</div>


<!-- SESSÃO 3. -->
<div class="w-full dark:bg-slate-900">
    <div class="mx-auto max-w-7xl px-8 lg:px-12 pt-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-600 dark:text-white sm:text-4xl">
                Últimas postagens
            </h2>
        </div>
        <div class="mx-auto mt-8 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-12 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <!-- First blog post -->
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                <img src="img/ensaio-1.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded ring-1 ring-inset ring-gray-900/10"></div>
                <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                    <time datetime="2023-10-11" class="mr-8">11/10/23</time>
                    <div class="-ml-4 flex items-center gap-x-4">
                        <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                            <circle cx="1" cy="1" r="1"></circle>
                        </svg>
                        <div class="flex gap-x-2.5">
                            <p>Mossoró</p>
                        </div>
                    </div>
                </div>
                <h3 class="mt-3 text-lg font-semibold leading-6 text-white hover:underline">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum vel quidem commodi!
                    </a>
                </h3>
            </article>
            <!-- Second blog post -->
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                <img src="img/ensaio-1.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded ring-1 ring-inset ring-gray-900/10"></div>
                <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                    <time datetime="2023-10-11" class="mr-8">11/10/23</time>
                    <div class="-ml-4 flex items-center gap-x-4">
                        <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                            <circle cx="1" cy="1" r="1"></circle>
                        </svg>
                        <div class="flex gap-x-2.5">
                            <p>Areia Branca</p>
                        </div>
                    </div>
                </div>
                <h3 class="mt-3 text-lg font-semibold leading-6 text-white hover:underline">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, temporibus!
                    </a>
                </h3>
            </article>
            <!-- Third blog post -->
            <article class="relative isolate flex flex-col justify-end overflow-hidden rounded bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                <img src="img/ensaio-1.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded ring-1 ring-inset ring-gray-900/10"></div>
                <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                    <time datetime="2023-10-11" class="mr-8">11/10/23</time>
                    <div class="-ml-4 flex items-center gap-x-4">
                        <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                            <circle cx="1" cy="1" r="1"></circle>
                        </svg>
                        <div class="flex gap-x-2.5">
                            <p>Natal</p>
                        </div>
                    </div>
                </div>
                <h3 class="mt-3 text-lg font-semibold leading-6 text-white hover:underline">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere consequatur nesciunt asperiores at reprehenderit praesentium.
                    </a>
                </h3>
            </article>
            <!-- More blog posts can be added similarly -->
        </div>
    </div>
</div>

<div class='text-center p-4'>
    <x-button link='/posts' content='Ver mais' px='12' py='4' />
</div>

@stop