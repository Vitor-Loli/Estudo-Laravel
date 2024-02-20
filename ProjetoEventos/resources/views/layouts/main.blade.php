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
    @if(session('msg'))
        <script>
            alert('Evento Criado com Sucesso!!')
        </script>
    @endif

    <header class = "cabecalho">
        <div class="logo">
            <h1><a href="/">LOGO</a></h1>
        </div>
        <div class="menu">
            <ul>
                <li class = "eventos"><a href="/eventos">Seus eventos</a></li>
                <li class = "entrar"><a href="/login">Login</a></li>
                <li class = "registrar"><a href="/registrar">Registrar</a></li>
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