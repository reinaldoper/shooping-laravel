<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name')}}::@yield('titulo')</title>
  {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > --}}
  <style>
    html, body{
      padding: 0;
      margin: 0;
      background-image: url('https://img.freepik.com/fotos-premium/telefones-celulares-na-loja-generative-ai_220873-21824.jpg');
      width: 100%;
      height: 100vh;
      background-size: cover;
    }

    .logo{
      margin: 0;
      width: 100%;
      height: 10vh;
      padding: 10px;
      background-color: black;
      text-align: center;
      /* position: fixed; */
    }

    .logo img{
      width: 40%;
      height: 20vh;
      padding: 10px;
      text-align: center;
    }
    .form{
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
      text-align: center;
      border: 1px solid black;
      padding: 10px;
      margin: auto;
      width: 20vw;
      margin-top: 10px;
    }

    .field{
      margin-bottom: 10px;
    }
    input{
      width: 15vw;
      height: 2vh;
    }
    footer{
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      text-align: center;
    }

    li{
      list-style: none;
    }

    .product{
      display: flex;
      text-align: center;
      justify-content: center;
    }
    .list{
      display: flex;
      width: 93vw;
      flex-direction: row;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
    }

    .list-itens{
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      margin-left: 10px;
      background-color: aliceblue;
      padding: 10px;
      margin-bottom: 10px;
    }

    .img{
      display: flex;
      width: 10vw;
      height: 10vh;
      box-shadow: 10px 10px 10px gray;
    }
    #app{
      margin-top: 100px;
    }

    .produto-img{
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      width: 95vw;
    }

    .image-img-details{
      display: flex;
      flex-wrap: wrap;
      width: 20vw;
      height: 20vh;
      border-radius: 10px;
      margin-left: 2vw;
      margin-bottom: 0.2vh;
      box-shadow: 10px 10px 10px gray;
    }

    @media screen and (max-width: 300px){
      .image-img-details{
        display: flex;
        flex-wrap: wrap;
        width: 10vw;
        height: 10vh;
        border-radius: 10px;
        margin-left: 2vw;
        margin-bottom: 0.2vh;
      }
    }

    .details{
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      text-align: center;
      justify-content: center;
      margin-top: 10vh;
    }

    .button-details{
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 10px;
      margin: center;
      background-color: rgb(0, 255, 55);
      width: 10vw;
      cursor: pointer;
      border-radius: 8px;
      border: none !important;
    }
    .button-home{
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 10px;
      margin: center;
      background-color: rgb(0, 255, 55);
      width: 10vw;
      cursor: pointer;
      border-radius: 8px;
      border: none !important;
    }
    .footer{
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="logo">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo3c4LAPBmITB7-d9c-e5IMrVzjvz4LKIQMnbpphvcB-o2byKpZ-9VFkTomQ45zKCXnZA&usqp=CAU" alt="Digital">
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