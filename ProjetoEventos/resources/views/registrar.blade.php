<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="/css/registrar.css">
</head>
<body>
    @if(session('msg') == "As senhas precisam ser iguais!")
        <p class="msgError">{{session('msg')}}</p>
    @elseif(session('msg') == "Conta criada com sucesso!")
        <p class="msg">{{session('msg')}}</p>
    @endif
    <form action="/registrar/usuario" method="POST">

    {{-- Não posso esquecer disso nos forms--}}
    @csrf

        <h1>Criar Conta</h1>

        <div class="form-group">
            <label for="txtNome">Seu nome</label>
            <input type="text" name="txtNome">
        </div>

        <div class="form-group">
            <label for="txtUsuario">Usuário</label>
            <input type="text" name="txtUsuario">
        </div>
        
        <div class="form-group">
            <label for="txtSenha">Senha</label>
            <input type="password" name="txtSenha">
        </div>

        <div class="form-group">
            <label for="txtSenhaA">Confirme a senha</label>
            <input type="password" name="txtSenhaA">
        </div>

        <div class="form-group">
            <input type="submit" value="Criar" class="submit">
        </div>

        <div >
            <p><a href="/login">Já tem uma conta?</a></p>
            <p><a href="/">Voltar ao início</a></p>
        </div>
        
    </form>
</body>
</html>