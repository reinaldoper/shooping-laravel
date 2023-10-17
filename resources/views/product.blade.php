@extends('layout.base')
@section('titulo', 'Details')
    
@section('conteudo')

  <div class="details">
    <h1>{{ $produto->original['title']}}</h1>
    <p>{{ $produto->original['description'] }}</p>
    <p>{{ $produto->original['brand'] }}</p>
    <p><strong>Preço: $R</strong> {{ $produto->original['price'] }}</p>
    <p><img src={{ $produto->original['thumbnail'] }} class="img-detail" alt="images"></p>
    <p><strong>Categoria:</strong> {{ $produto->original['category'] }}</p>
    <a href="{{ route('home') }}">
      <button type="button">Home</button>
    </a>
  </div>
@endsection