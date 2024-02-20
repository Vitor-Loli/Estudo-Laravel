<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/registrar.css">
</head>
<body>

    @if(session('msg'))
        <p class="msgError">{{session('msg')}}</p>
    
    @endif
    
    <form action="/login/usuario" method="POST">

    {{-- Não posso esquecer disso nos forms--}}
    @csrf

        <h1>Fazer Login</h1>

        <div class="form-group">
            <label for="txtUsuario">Usuário</label>
            <input type="text" name="txtUsuario">
        </div>
        
        <div class="form-group">
            <label for="txtSenha">Senha</label>
            <input type="password" name="txtSenha">
        </div>

        <div class="form-group">
            <input type="submit" value="Entrar" class="submit">
        </div>

        <div >
            <p><a href="/registrar">Não tem uma conta?</a></p>
            <p><a href="/">Voltar ao início</a></p>
        </div>
        
    </form>
</body>
</html>