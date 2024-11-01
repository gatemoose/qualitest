@extends('Layout')

@section('content')

<!-- SESSÃO 1. -->
<div class="flex flex-wrap items-center mt-12 text-left text-center px-10">
    <div class="w-full md:w-3/5 lg:w-1/2 px-4">
        <img src="img/sondagem.jpg" alt="Membros da Equipe Qualitest em trabalho." class="inline-block rounded shadow-lg">
    </div>
    <div class="w-full md:w-2/5 lg:w-1/2 px-4 text-center dark:text-neutral-50 md:text-left lg:pl-12">
        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
            Um pouco da nossa história...
        </h3>
        <p class="sm:text-lg mt-6 font-normal text-gray-600 dark:text-gray-300">
            Somos uma empresa fundada em outubro de 2017 pela engenheira idealizadora e responsável técnica <strong>Edilene Patricia da Silva Oliveira</strong>, que traz inovação ao mercado de controle de qualidade de concreto e demais ensaios voltados à área, contando com larga experiência dos seus funcionários no mercado adquirida através de longos anos de atuação na área de obras civis.
            Contando com equipamentos novos e de excelente qualidade, e profissionais capacitados, podemos atender sua demanda de forma personalizada com rapidez e eficiência.
        </p>
    </div>
</div>


<!-- SESSÃO 2. -->
<section class="dark:bg-gray-900 pt-10">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-8 grid grid-cols-1 gap-16 sm:grid-cols-2 lg:grid-cols-3">
            <div class="text-center">
                <div class="flex items-center justify-center mb-2 mr-10 mr-10">
                    <div class="h-12 w-12 rounded-md bg-transparent text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 dark:text-gray-300">
                        Missão
                    </h3>
                </div>
                <p class="mt-2 font-normal text-gray-600 dark:text-gray-300">
                    Atender às necessidades e expectativas dos nossos clientes na obtenção de resultados e elaboração de parecer técnico, no controle de qualidade dos materiais empregados na construção civil, cumprindo os prazos acordados e garantindo a ausência de desvios nos serviços prestados. 
                </p>
            </div>
            <div class="text-center">
                <div class="flex items-center justify-center mb-2 mr-10">
                    <div class="h-12 w-12 rounded-md bg-transparent text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 dark:text-gray-300">
                        Valores
                    </h3>
                </div>
                <p class="mt-2 font-normal text-gray-600 dark:text-gray-300">
                    Os valores da Qualitest Engenharia incluem a valorização do próximo, qualidade, inovação e cumprimento de prazos. A ética e a responsabilidade garantem ações comprometidas com resultados que beneficiem nossos clientes.
                </p>
            </div>
            <div class="text-center">
                <div class="flex items-center justify-center mb-2 mr-10">
                    <div class="h-12 w-12 rounded-md bg-transparent text-blue-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 dark:text-gray-300">
                        Visão
                    </h3>
                </div>
                <p class="mt-2 font-normal text-gray-600 dark:text-gray-300">
                    Ser referência em assessoria técnica e controle tecnológico de materiais da construção civil, como concreto e solos, é vital para garantir qualidade e segurança nas obras. Isso envolve técnicas avançadas e um compromisso com a excelência no atendimento, oferecendo soluções eficazes para o mercado.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- SESSÃO 3. -->
<section class="pt-10 pb-10 overflow-hidden dark:bg-gray-900 sm:pt-16 2xl:pt-16">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 md:grid-cols-2">

            <div>
                <h2 class="text-2xl font-bold leading-tight text-black dark:text-white">
                    Edilene Patrícia da Silva Oliveira
                </h2>
                <p class="max-w-lg mt-3 text-xl font-normal text-gray-600 dark:text-gray-300 md:mt-8">
                Edilene Patrícia da Silva Oliveira é a Técnica em Edificações e Engenheira Civil registrada no CREA (210703637-3) que ocupa a posição de Responsável Técnica na QualiTest Engenharia e Assessoria Técnica. Com especialização em Dimensionamento, Patologia, Terapia e Tecnologia em Estruturas de Concreto, Edilene possui uma sólida formação complementar, que inclui cursos em revestimento cerâmico, manutenção predial e diversos simpósios na área da construção civil.
            </p>
            </div>

            <div class="relative">
                <img class="relative rounded w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="img/edilene.jpg" alt="" />
            </div>

            

        </div>

        <div class="grid grid-cols-2 p-8">
                <ul class="font-normal text-gray-600 dark:text-gray-300 gap-4 list-disc">
                    <h3 class="text-xl font-bold leading-tight text-black dark:text-white">
                    Qualificação Complementar
                    </h3>
                    <li>Sistema de Revestimento Cerâmico – IFRN Mossoró</li>
                    <li>Manutenção Predial – IFRN Mossoró</li>
                    <li>1º Simpósio da Construção Civil – IFRN Mossoró</li>
                    <li>2º Simpósio da Construção Civil – IFRN Mossoró</li>
                    <li>Ciclo de Palestras da Construção Civil – IFRN Natal</li>
                    <li>MicroStation 2D – IFRN Mossoró</li>
                    <li>Planejando a Construção</li>
                    <li>Curso de Orientação Profissional</li>
                    <li>Curso de Gestão de Qualidade Ampla</li>
                    <li>Primeiros Socorros – UNP</li>
                    <li>Combate a Incêndio – UNP</li>
                    <li>NR10 – Instalações e Serviços em Eletricidade – UNP</li>
                    <li>Segurança em Atividades de Petróleo e Gás – UNP</li>
                    <li>Higiene Ocupacional – UNP</li>
                </ul>
                
                <ul class="font-normal text-gray-600 dark:text-gray-300 gap-4 list-disc">
                    <h3 class="text-xl font-bold leading-tight text-black dark:text-white">
                        Atuação Profissional
                    </h3>
                    <li>Monitoria do Laboratório de Construção Civil IFRN Mossoró</li>
                    <li>Técnica em Edificações Metro Quadrado Construções e Serviços</li>
                    <li>Técnica em Edificações 3B Serviços e Construções</li>
                    <li>Técnica em Edificações WSC Empreendimentos e Construções</li>
                    <li>Técnica em Edificações Vipetro – Vilmar Pereira</li>
                    <li>Construções e Montagens Petrolíferas</li>
                    <li>Supervisora de Laboratório Consultest Engenharia e Serviços – Controle tecnológico da construção da fábrica de Cimentos Mizú – Baraúna RN</li>
                    <li>Técnica de Planejamento e Diligenciamento Sigmatec</li>
                    <li>Responsável Técnica QualiTest Engenharia e Assessoria Técnica</li>
                </ul>
            </div>

    </div>
</section>

@stop