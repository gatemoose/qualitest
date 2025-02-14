@extends('Layout')

@section('content')
<form action="{{ route('logoutcliente') }}" method="post">
    @csrf
    <button class='text-white px-4 py-2 bg-red-500 hover:underline hover:bg-red-600 transition-colors duration-700' type="submit">Logout</button>
</form>

<div  class='text-white'>
@foreach ($docs as $doc)
    Title: {{ $doc->title }}
    <br>
    Data de Expiração: {{ $doc->expiration_date  }}
    @if ($doc->expiration_date < now())
        expirou!!!!!
    @else
        <a target='_blank' href="{{ $doc->link }}">
            Baixar
        </a>
    @endif

    <br>

@endforeach
</div>
@endsection