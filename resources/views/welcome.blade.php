@extends('layout.base')

@section('titulo', 'Shooping')
    
@section('conteudo')

<div id="app">
    <h1 class="product">Produtos</h1>
    @if ($data)
        <ul class="list">
            @foreach($data->original['products'] as $produto)
                <div class="list-itens">
                    <li><strong>{{ $produto['title'] }}</strong></li>
                    <li><h5>{{ $produto['category'] }}</h5></li>
                    <li><img src={{ $produto['thumbnail'] }} class="img" alt="images"></li>
                    <li><h5>{{ $produto['price'] }}: $R</h5></li>
                    <button type="button" class="button-details" onclick="window.location.href='{{ route('product.show', ['id' => $produto['id']]) }}'">More details</button>
                </div>
            @endforeach
        </ul>
    @endif
</div>

@endsection