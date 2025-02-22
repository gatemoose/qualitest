@extends ('Layout')

@section ('content')

<section class="grid min-h-screen p-8 place-items-center">
  <div class="container grid grid-cols-1 gap-8 my-auto lg:grid-cols-2">

    @forelse($posts as $post)

    <div class="relative flex-col bg-clip-border rounded bg-transparent text-gray-700 dark:text-gray-300 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded overflow-hidden bg-white text-gray-700 shadow-lg m-0">
        <img src="{{ Storage::url($post->image) }}" alt="Capa da postagem" class="object-cover w-full h-full" />
      </div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block !text-blue-500 antialiased text-sm font-light leading-normal text-inherit mb-4 !font-semibold">
            {{ $post->tag }}
        </p>
        <a href="{{ route('post', ['id' => $post->id]) }}" class="block antialiased tracking-normal text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700 dark:hover:text-white hover:underline" wire:navigate>
            {{ $post->title }}
        </a>
        <p class="block antialiased text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">
            {{ $post->description }}
        </p>
        <div class="flex items-center gap-4">
          <img src="img/logo-no-bg.png" class="inline-block relative object-cover object-center w-12 h-12 rounded-lg" />
          <div>
            <p class="block antialiased text-base font-light leading-relaxed text-gray-900 dark:text-gray-300 mb-0.5 !font-semibold">
                Qualitest Eng.
            </p>
            <p class="block antialiased text-sm leading-normal text-gray-700 dark:text-gray-300 font-normal">
                {{ $post->created_at->format('d/m/Y') }}
            </p>
          </div>
        </div>
      </div>
    </div>

    @empty
      No posts found.
    @endforelse    
    
  </div>
</section>

@endsection