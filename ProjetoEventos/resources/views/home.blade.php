@extends('layouts.main')

@section ('title', 'Home - HDCEvents')

@section ('content')
    
    <link rel="stylesheet" href="/css/home.css">
    
        <div class="apresentacao">
            <h1>Bem vindo!!</h1>  
            <form action="/" method="GET">
                <input type="text" name="busca" placeholder = "Busque um evento">
            </form>   
        </div>

        
        
        
        <div class="eventos">
            @if($busca)
                <h1>Buscando por: {{$busca}}</h1>
            @else
                <h1>Eventos em Aberto:</h1>
            @endif

            @if(count($eventos) != 0)
                <div class="cards" >
                    @foreach($eventos as $evento)
                        <div class="card">
                            <img src="/images/eventos/{{$evento->imagem}}" alt="">
                            <h3>{{$evento->nome}}</h3>
                            <h4>{{date('d/m/Y', strtotime($evento->data))}}</h4>
                            <p>{{$evento->descricao}}</p>
                            <p>{{$evento->cidade}}</p>

                            @if($evento->status == 0)
                                <h4>Público</h4>
                            @else
                                <h4>Privado</h4>
                            @endif

                            <a href="/eventos/evento/{{$evento->id}}" class="verevento">Ver Evento</a>
                        </div>
                    @endforeach
                </div>
            @else

                <p>Não há eventos em aberto</p>

            @endif

        </div>

            

@endsection