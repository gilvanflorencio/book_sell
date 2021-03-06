<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <header>
        <nav>
            <a href="/"><img src="img/book_logo.svg" alt="BookSell"></a>
            <ul>
                <li class="{{request()->is('favoritos') ? 'selected' : ''}}"><a href="/favoritos">Favoritos</a></li>
                <li class="{{request()->is('login') ? 'selected' : ''}}"><a href="/login">Login</a></li>
                <li class="{{request()->is('cadastro') ? 'selected' : ''}}"><a href="/cadastro">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    @yield('conteudo')
    <footer>
        <p>copyright© - 2020 BookSell. All rights reserved</p>
    </footer>
</body>

</html>