@extends('Layout')

@section('content')

<!-- SESSÃO 1. -->
<section class="overflow-hidden bg-neutral-50 dark:bg-gray-900 py-8 sm:py-16">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:pr-8 lg:pt-4">
        <div class="lg:max-w-lg">
          <h2 class="text-base font-semibold leading-7 text-blue-500">
            Se o prazo é curto, nós nos encaixamos nesse tempo!
          </h2>
          <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl">
            Quais serviços oferecemos?
          </p>
          <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 dark:text-gray-300 lg:max-w-none">
            <div class="relative pl-9">
              <dt class="inline font-semibold text-gray-900 dark:text-gray-100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true" class="absolute left-1 top-1 h-5 w-5 text-blue-500">
                  <path
                    d="M3.196 12.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 12.87z">
                  </path>
                  <path
                    d="M3.196 8.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 8.87z">
                  </path>
                  <path
                    d="M10.38 1.103a.75.75 0 00-.76 0l-7.25 4.25a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.76 0l7.25-4.25a.75.75 0 000-1.294l-7.25-4.25z">
                  </path>
                </svg>
                    Oferecemos
              </dt>
              <dd class="inline">
                um serviço que contempla uma variedade de ensaios, trazendo comodidade e segurança aos nossos clientes.
              </dd>
            </div>
            <div class="relative pl-9">
              <dt class="inline font-semibold text-gray-900 dark:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                  class="absolute left-1 top-1 h-5 w-5 text-blue-500">
                  <path fill-rule="evenodd"
                    d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                    clip-rule="evenodd"></path>
                </svg>
                Parecer técnico
              </dt>
              <dd class="inline">
                é a manifestação especializada sobre determinado assunto, no nosso caso a real situação de uma edificação quando se trata de parecer técnico de obras civis.
              </dd>
            </div>
            <div class="relative pl-9">
              <dt class="inline font-semibold text-gray-900 dark:text-gray-100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true" class="absolute left-1 top-1 h-5 w-5 text-blue-500">
                  <path fill-rule="evenodd"
                    d="M14.5 10a4.5 4.5 0 004.284-5.882c-.105-.324-.51-.391-.752-.15L15.34 6.66a.454.454 0 01-.493.11 3.01 3.01 0 01-1.618-1.616.455.455 0 01.11-.494l2.694-2.692c.24-.241.174-.647-.15-.752a4.5 4.5 0 00-5.873 4.575c.055.873-.128 1.808-.8 2.368l-7.23 6.024a2.724 2.724 0 103.837 3.837l6.024-7.23c.56-.672 1.495-.855 2.368-.8.096.007.193.01.291.01zM5 16a1 1 0 11-2 0 1 1 0 012 0z"
                    clip-rule="evenodd"></path>
                  <path
                    d="M14.5 11.5c.173 0 .345-.007.514-.022l3.754 3.754a2.5 2.5 0 01-3.536 3.536l-4.41-4.41 2.172-2.607c.052-.063.147-.138.342-.196.202-.06.469-.087.777-.067.128.008.257.012.387.012zM6 4.586l2.33 2.33a.452.452 0 01-.08.09L6.8 8.214 4.586 6H3.309a.5.5 0 01-.447-.276l-1.7-3.402a.5.5 0 01.093-.577l.49-.49a.5.5 0 01.577-.094l3.402 1.7A.5.5 0 016 3.31v1.277z">
                  </path>
                </svg>
                Ensaios em concreto
            </dt>
              <dd class="inline">
                fresco endurecido, sejam destrutivos ou não, bem como cimento, argamassa e agregados. 
              </dd>
            </div>
          </dl>
        </div>
        <div class="mt-10 flex items-center gap-x-6">
            <!--
          <a href="/contato"
            class="rounded-sm bg-transparent px-3.5 py-2.5 text-md font-semibold text-gray-900 dark:text-white shadow-sm hover:bg-neutral-100 dark:hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white border border-gray-500 dark:border-gray-700">
            Entre em contato
          </a> -->
          <x-button link='/contato' content='Entre em contato' px='4' py='3' />
          <!-- 
          <a href="#nossos-serviços"
            class="rounded-sm bg-transparent px-3.5 py-2.5 text-md font-semibold text-gray-900 dark:text-white shadow-sm hover:bg-neutral-100 dark:hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white border border-gray-500 dark:border-gray-700">
            Saiba mais
          </a> -->
          <x-button link='/quem-somos' content='Saiba mais' px='5' py='3' />
        </div>
      </div><img src="img/ensaio-1.jpg" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
    </div>
  </div>
</section>


<!-- SESSÃO 2. -->
<div class="py-24 px-8 max-w-5xl mx-auto flex flex-col md:flex-row gap-12">
    <div class="flex flex-col text-left basis-1/2 dark:text-gray-200">
        <p class="inline-block font-semibold text-primary mb-4">Saiba mais sobre</p>
        <p id="nossos-serviços" class="sm:text-4xl text-3xl font-extrabold text-base-content">Nossos serviços</p>
        
        <ul class="pt-4">
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-200">
                    Cimento
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Determinação de Finura NBR 11579.</li>
                        <li>Massa especifica do cimento NBR 6474 / NM 23 Tempo de pega NBR NM 65</li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-100">
                    Agregados
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Composição granulométrica NBR NM 248</li>
                        <li>Massa unitária do agregado solto e compactado NBR NM 45</li>
                        <li>Massa específica, massa específica aparente e absorção de água NBR NM 52 / 53</li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-100">
                    Ensaios com solos
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Granulometria por peneiramento e sedimentação NBR 7181</li>
                        <li>Determinação do limite de liquidez (LL) NBR 6456</li>
                        <li>Determinação do limite de plasticidade (LP) NBR 7180</li>
                        <li>Determinação da massa específica real dos grãos de solos finos (ρs) NBR 6508</li>
                        <li>Determinação do teor de umidade dos solos (w) NBR 6457</li>
                        <li>Determinação da massa específica aparente dos solos (ρNat)</li>
                        <li>Compactação (Energias Proctor Normal/Intermediário/Modificada) NBR 7182</li>
                        <li>Índice de Suporte Califórnia – ISC (Energias Proctor Normal/Intermediária/Modificada) NBR 9895</li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-100">
                    Outros serviços
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Ensaio a compressão de blocos cerâmicos NBR 15270</li>
                        <li>Determinação de medidas das faces – Dimensões efetivas</li>
                        <li>Determinação das medidas das paredes externas e septos dos blocos</li>
                        <li>Determinação de desvio em relação ao esquadro</li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
        
    </div>
    <ul class="basis-1/2 dark:text-gray-200">
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-200">
                    Ensaios em Concreto Fresco
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Moldagem e Cura de corpos de prova NBR 5738.</li>
                        <li>Ensaio de abatimento de tronco de cone – Slump Test NBR NM 67</li>
                        <li>Concreto Fresco – Determinação de Massa específica NBR 9833</li>
                        <li>Dosagem Racional de concreto – Métodos ABCP – IPT</li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-100">
                    Ensaios em Concreto Endurecido
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Resistência à compressão axial NBR 5739.</li>
                        <li>Extração, preparo e ensaio em testemunhos de concreto NBR 7680.</li>
                        <li>Resistência a tração na flexão e resistência por compressão na diametral NBR 7680 / NBR 12916 / NBR 12142.</li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-100">
                    Ensaios Destrutivos e Não Destrutivos de Concreto
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Extração de testemunhos e ensaios de resistência à compressão NBR 7680 / NBR 5739</li>
                        <li>Esclerometria – Avaliação de resistência superficial do Concreto NBR 7584</li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-100">
                    Sondagem SPT
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Solo – Sondagens de simples reconhecimento com SPT – Método de ensaio NBR 6484</li>
                        <li>Rochas e solos – Terminologia NBR 6502</li>
                        <li>Solo – Análise granulométrica – Método de ensaio NBR 7181</li>
                        <li>Programação de sondagens de simples reconhecimento dos solos para fundações de edifícios – Procedimento NBR 8036</li>
                        <li>Rochas e solos – Simbologia NBR 13441</li>
                        <li>Identificação e descrição das amostras de solo obtidas em sondagens de simples reconhecimento de solos NBR 7250</li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content dark:text-gray-100">
                    Outros serviços
                </span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-tight">
                    <ul class="space-y-1 leading-tight dark:text-gray-300 list-disc list-inside">
                        <li>Determinação da planeza das faces</li>
                        <li>Determinação da área bruta e da área líquida</li>
                        <li>Ensaio de penetração de cloretos em concretos</li>
                        <li>Ensaio de carbonatação em concretos</li>
                        <li>Ensaio de pH em concretos</li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>


<!-- DROPDOWN SCRIPT. -->
<script>
    function toggleFAQ(button) {
        const content = button.nextElementSibling;
        button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
        content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
    }
</script>

@stop