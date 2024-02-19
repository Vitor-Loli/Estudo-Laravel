@extends('layouts.main')

@section ('title', 'Criar Evento - HDCEvents')

@section ('content')
    
    <form action="/eventos/create/novo" method="POST">

        {{-- Não posso esquecer disso--}}
        @csrf

        <h1>Criar novo evento</h1>

        <div class="form-group">
            <label for="txtNome">Nome do Evento</label>
            <input type="text" name="txtNome">
        </div>

        <div class="form-group">
            <label for="txtDesc">Descrição do Evento</label>
            <input type="text" name="txtDesc">
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


        <input type="submit" class="submit" value="Criar Evento">

    </form>

@endsection