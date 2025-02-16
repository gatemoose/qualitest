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
    <!-- <div class="flex flex-col lg:flex-row lg:space-x-12">
      <div class="px-4 lg:px-0 mt-12 text-gray-700 dark:text-gray-300 text-lg leading-relaxed w-full">
        <p class="pb-6">
          Aqui, ficará o conteúdo da postagem em si. Abaixo, há textos de exemplo, mostrando como ficariam postagens de conteúdo mais extenso.
        </p>

        <p class="pb-6">
          Difficulty on insensible reasonable in. From as went he they. Preference themselves me as thoroughly partiality considered on in estimating. Middletons acceptance discovered projecting so is so or. In or attachment inquietude remarkably comparison at an. Is surrounded prosperous stimulated am me discretion expression. But truth being state can she china widow. Occasional preference fat remarkably now projecting uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening newspaper in advantage frankness to concluded unwilling.
        </p>

        <p class="pb-6">
          Adieus except say barton put feebly favour him. Entreaties unpleasant sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course active law spring six. Pursuit showing tedious unknown winding see had man add. And park eyes too more him. Simple excuse active had son wholly coming number add. Though all excuse ladies rather regard assure yet. If feelings so prospect no as raptures quitting.
        </p>

        <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
          Exemplo de menção. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore id, rem praesentium odit delectus optio expedita laborum! Cupiditate corporis a reprehenderit accusamus temporibus, aliquam esse, excepturi consequuntur, assumenda veniam repellendus.
        </div>

        <p class="pb-6">
          Exquisite cordially mr happiness of neglected distrusts. Boisterous impossible unaffected he me everything. Is fine loud deal an rent open give. Find upon and sent spot song son eyes. Do endeavor he differed carriage is learning my graceful. Feel plan know is he like on pure. See burst found sir met think hopes are marry among. Delightful remarkably new assistance saw literature mrs favourable.
        </p>

        <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-semibold mb-4 mt-4">
            Exemplo de cabeçalho adicional.
        </h2>

        <p class="pb-6">
          Guest it he tears aware as. Make my no cold of need. He been past in by my hard. Warmly thrown oh he common future. Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in.
        </p>

        <p class="pb-6">
          Dashwood contempt on mr unlocked resolved provided of of. Stanhill wondered it it welcomed oh. Hundred no prudent he however smiling at an offence. If earnestly extremity he he propriety something admitting convinced ye. Pleasant in to although as if differed horrible. Mirth his quick its set front enjoy hoped had there. Who connection imprudence middletons too but increasing celebrated principles joy. Herself too improve gay winding ask expense are compact. New all paid few hard pure she.
        </p>

        <p class="pb-6">
          Breakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at tastes really so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited elderly be. View him she roof tell her case has sigh. Moreover is possible he admitted sociable concerns. By in cold no less been sent hard hill.
        </p>

        <p class="pb-6">
          Detract yet delight written farther his general. If in so bred at dare rose lose good. Feel and make two real miss use easy. Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable. Latter remark hunted enough vulgar say man. Sitting hearted on it without me.
        </p>
      </div>


      
    </div> -->
  </main>
</div>


@endsection