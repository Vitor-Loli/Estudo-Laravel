<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class = "cabecalho">
        <div class="logo">
            <h1><a href="/">LOGO</a></h1>
        </div>
        <div class="menu">
            <ul>
                <li class = "eventos"><a href="/eventos">Eventos</a></li>
                <li class = "entrar">Entrar</li>
                <li class = "registrar">Registrar</li>
            </ul>
        </div>
    </header>

    @yield('content')

    <footer class = "rodape">
        <div class="logo">
            LOGO
        </div>

        <div class="infos">
            Vitor Loli &copy; 2024
        </div>
    </footer>
</body>
</html>