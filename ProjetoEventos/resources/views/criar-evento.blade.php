@extends('layouts.main')

@section ('title', 'Criar Evento - HDCEvents')

@section ('content')

    <link rel="stylesheet" href="/css/criar-evento.css">
    
    <form action="/eventos/create/novo" method="POST" enctype="multipart/form-data">

        {{-- Não posso esquecer disso--}}
        @csrf

        <div class="inputs">
            <h1>Criar novo evento</h1>

            <div class="form-group">
                <label for="txtNome">Nome do Evento</label>
                <input type="text" name="txtNome">
            </div>

            <div class="form-group">
                <label for="txtDesc">Descrição do Evento</label>
                <textarea type="text" name="txtDesc"></textarea>
            </div>

            <div class="form-group">
                <label for="txtData">Data do Evento</label>
                <input type="date" name="txtData">
            </div>

            <div class="form-group">
                <label for="txtCidade">Cidade que acontecerá</label>
                <input type="text" name="txtCidade">
            </div>

            <div class="form-group">
                <label for="txtStatus">Privacidade</label>
                <select name="txtStatus">
                    <option value="">Selecione um...</option>
                    <option value="0">Público</option>
                    <option value="1">Privado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="txtStatus">Itens de Infraestrutura:</label>
                <div class="form-check">
                    <input type="checkbox" name="itens[]" value="Cadeiras">Cadeiras</input>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="itens[]" value="Palco">Palco</input>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="itens[]" value="OpenBar">OpenBar</input>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="itens[]" value="OpenFood">OpenFood</input>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="itens[]" value="Brindes">Brindes</input>
                </div>
            </div>


            <input type="submit" class="submit" value="Criar Evento">
        </div>

        <div class="image">
            <div class="form-group">
                <label for="txtImagem">Imagem do Evento</label>
                <input type="file" name="Imagem" id="Imagem">
            </div>
        </div>


    </form>

@endsection