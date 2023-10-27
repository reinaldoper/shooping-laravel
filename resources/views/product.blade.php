@extends('layout.base')
@section('titulo', 'Details')
    
@section('conteudo')

  <div class="details">
    <h1>{{ $produto->original['title']}}</h1>
    <p>{{ $produto->original['description'] }}</p>
    <p>{{ $produto->original['brand'] }}</p>
    <p><strong>Preço: $R</strong> {{ $produto->original['price'] }}</p>
    <div class="produto-img">
      @foreach($produto->original['images'] as $image)
       <img src={{ $image }} alt="images" class="image-img-details">
    @endforeach
    </div>
    <p><strong>Categoria:</strong> {{ $produto->original['category'] }}</p>
    <p class="footer">
      <button type="button" onclick="window.location.href='{{route('home')}}'" class="button-home">Home</button>
    </p>
  </div>
@endsection