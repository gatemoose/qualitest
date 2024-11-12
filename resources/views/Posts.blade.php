@extends ('Layout')

@section ('content')

<!-- POSTS. -->
<section class="grid min-h-screen p-8 place-items-center">
  <div class="container grid grid-cols-1 gap-8 my-auto lg:grid-cols-2">

    <!-- POST 1. -->
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 dark:text-gray-300 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0">
        <img src="img/ensaio-1.jpg" alt="Capa da postagem" class="object-cover w-full h-full" />
      </div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block !text-blue-500 antialiased text-sm font-light leading-normal text-inherit mb-4 !font-semibold">
            Technology
        </p>
        <a href="#" class="block antialiased tracking-normal text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700 dark:hover:text-white hover:underline">
            Revolutionizing Our Production Process
        </a>
        <p class="block antialiased text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">
            Eu vou fazer um foreach (ou algo + otimizado com Eloquent) no banco de dados e os Posts aparecerão aqui em sequência.
        </p>
        <div class="flex items-center gap-4">
          <img src="img/logo-no-bg.png" class="inline-block relative object-cover object-center w-12 h-12 rounded-lg" />
          <div>
            <p class="block antialiased text-base font-light leading-relaxed text-gray-900 dark:text-gray-300 mb-0.5 !font-semibold">
                Qualitest Eng.
            </p>
            <p class="block antialiased text-sm leading-normal text-gray-700 dark:text-gray-300 font-normal">
                15/10/2024
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- POST 2. -->
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 dark:text-gray-300 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0">
        <img src="img/ensaio-1.jpg" alt="Capa da postagem" class="object-cover w-full h-full" />
      </div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased text-sm font-light leading-normal text-inherit mb-4 !text-orange-500 !font-semibold">
            Technology
        </p>
        <a href="#" class="block antialiased tracking-normal text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700 dark:hover:text-white hover:underline">
            Revolutionizing Our Production Process
        </a>
        <p class="block antialiased text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">
            Learn how our recent investment in new technology has revolutionized our production process, leading to improved efficiency and product quality.
        </p>
        <div class="flex items-center gap-4">
          <img src="img/logo-no-bg.png" class="inline-block relative object-cover object-center w-12 h-12 rounded-lg" />
          <div>
            <p class="block antialiased text-base font-light leading-relaxed text-gray-900 dark:text-gray-300 mb-0.5 !font-semibold">
                Qualitest Eng.
            </p>
            <p class="block antialiased text-sm leading-normal text-gray-700 dark:text-gray-300 font-normal">
                15/10/2024
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- POST 3. -->
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 dark:text-gray-300 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0">
        <img src="img/ensaio-1.jpg" alt="Capa da postagem" class="object-cover w-full h-full" />
      </div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased text-sm font-light leading-normal text-inherit mb-4 !text-orange-500 !font-semibold">
            Technology
        </p>
        <a href="#" class="block antialiased tracking-normal text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700 dark:hover:text-white hover:underline">
            Revolutionizing Our Production Process
        </a>
        <p class="block antialiased text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">
            Learn how our recent investment in new technology has revolutionized our production process, leading to improved efficiency and product quality.
        </p>
        <div class="flex items-center gap-4">
          <img src="img/logo-no-bg.png" class="inline-block relative object-cover object-center w-12 h-12 rounded-lg" />
          <div>
            <p class="block antialiased text-base font-light leading-relaxed text-gray-900 dark:text-gray-300 mb-0.5 !font-semibold">
                Qualitest Eng.
            </p>
            <p class="block antialiased text-sm leading-normal text-gray-700 dark:text-gray-300 font-normal">
                15/10/2024
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- POST 4. -->
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 dark:text-gray-300 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0">
        <img src="img/ensaio-1.jpg" alt="Capa da postagem" class="object-cover w-full h-full" />
      </div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased text-sm font-light leading-normal text-inherit mb-4 !text-blue-500 !font-semibold">
            Technology
        </p>
        <a href="#" class="block antialiased tracking-normal text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700 dark:hover:text-white hover:underline">
            Revolutionizing Our Production Process
        </a>
        <p class="block antialiased text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">
            Learn how our recent investment in new technology has revolutionized our production process, leading to improved efficiency and product quality.
        </p>
        <div class="flex items-center gap-4">
          <img src="img/logo-no-bg.png" class="inline-block relative object-cover object-center w-12 h-12 rounded-lg" />
          <div>
            <p class="block antialiased text-base font-light leading-relaxed text-gray-900 dark:text-gray-300 mb-0.5 !font-semibold">
                Qualitest Eng.
            </p>
            <p class="block antialiased text-sm leading-normal text-gray-700 dark:text-gray-300 font-normal">
                15/10/2024
            </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

@endsection