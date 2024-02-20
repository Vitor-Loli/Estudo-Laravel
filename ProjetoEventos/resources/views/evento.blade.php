@extends('layouts.main')

@section ('title', 'Evento - HDCEvents')

@section ('content')
    <link rel="stylesheet" href="/css/evento.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <div class="corpo">
        <div class="imagem">
            <img src="/images/eventos/{{$evento->imagem}}" alt="">
            <h1>{{$evento->nome}}</h1>
            <p>{{$evento->descricao}}</p>
        </div>

        <div class="infosEventos">  
            <p><i class='bx bx-calendar'></i>{{date('d/m/Y', strtotime($evento->data))}}</p>         
            <p><i class='bx bxs-location-plus'></i>{{$evento->cidade}}</p>

            @if($evento->status)
                <p><i class='bx bxs-lock-alt' ></i>Privado</p>
            @else
                <p><i class='bx bxs-lock-open-alt' ></i>Público</p>
            @endif

            <p><i class='bx bxs-star' ></i>Dono do Evento</p>

            <h3>Esse evento contém:</h3>
            <ul>
                @foreach($evento->itens as $item)
                    <li><i class='bx bx-subdirectory-right'></i>{{$item}}</li>
                @endforeach
            </ul>
            
        </div>
    </div>

    

    

@endsection