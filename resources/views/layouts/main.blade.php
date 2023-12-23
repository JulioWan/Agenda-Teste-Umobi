<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="/img/2277980.png">


        <title>@yield('title')</title>

        <!-- Estilização-->
        <link rel="stylesheet" href="/css/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonte de texto-->
        <link rel="preconnect" href="<link rel="preconnect href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    </head>
    <body >
        <div>
            <div class="custom-container-top">
                
                <a href="/">
                    <h1>Agenda</h1>
                </a>

                <a href="/cadastro">
                    <h2>Cadastrar Contatos</h2>
                </a>

            </div>

            <div class="custom-container">
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @if (session('msg'))
                            <p class="msg">{{ session('msg')}}</p>
                        @endif
                        @yield('content')
                        {{-- serve para mostrar que aqui ficara o conteudo
                        das views --}}
                    </div>
                </div>
            </main>
              
            </div>
           
        </div>
    </body>
</html>
