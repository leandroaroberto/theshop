@extends('layouts.app')

@section('header1')
@component('components.header1')
      @slot('titulo')
        Novo produto aqui
      @endslot
      @slot('texto')
        <p>Mussum Ipsum, cacilds vidis litro abertis.</p>
      @endslot
@endcomponent
@endsection

@section('search')
  @component('components.search')
  @endcomponent
@endsection

@section('produtoszone')
  @for($i= 0; $i < 12; $i++)
    @component('components.produtoszone')
        @slot('nomeProduto')
          MacbookPro
        @endslot
        @slot('descricaoProduto')
          A touch of genius
        @endslot
    @endcomponent
  @endfor
@endsection

@section('categoriaszone')
<h2>Categorias</h2>

@foreach($categorias as $categoria)
  @component('components.menu')
    @slot('categoria')
        {{$categoria->nome}}
    @endslot
    @slot('url')
      /{{$categoria->slug}}
    @endslot
    @slot('active')
    @endslot
  @endcomponent
@endforeach
@endsection
