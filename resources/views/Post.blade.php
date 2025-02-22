@extends ('Layout')

@section ('content')

<div class="max-w-screen-lg mx-auto">
  <main class="mt-7">
    <div class="mb-4 md:mb-0 w-full mx-auto relative">
      <div class="px-4 lg:px-0">
        <h2 class="text-4xl font-semibold text-gray-800 dark:text-slate-100 leading-tight py-2 mb-2">
          {!! $post->title !!}
        </h2>
      </div>

      <img src="{{ Storage::url($post->image) }}" class="w-full object-cover lg:rounded" style="height: 28em;"/>
    </div>

    <br>

    <div>
      <style>
        * {
          color: white;
        }
        h2 {
          font-size: 2em;
          text-decoration: bold;
          color: white;
        }
        h3 {
          font-size: 1.7em;
          text-decoration: bold;
          color: white;
        }
        p {
          font-size: 1em;
          color: white;
        }
        ul {
          list-style-type: circle;
        }
      </style>
    {!! $post->content !!}
    </div>
  </main>
</div>


@endsection