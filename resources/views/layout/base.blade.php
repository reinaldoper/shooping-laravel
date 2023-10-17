<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name')}}::@yield('titulo')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>
</head>
<body>
  <div class="logo">
    <img src="{{ asset('img/products.jpg')}}" alt="Digital">
  </div>
  <div class="container">
    @yield('conteudo')
  </div>
  <footer>
    <p>
      Digital - 2023 - <span>&#174;</span>
    </p>
  </footer>
</body>
</html>