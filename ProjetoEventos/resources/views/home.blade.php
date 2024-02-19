@extends('layouts.main')

@section ('title', 'Home - HDCEvents')

@section ('content')
    
    <link rel="stylesheet" href="/css/home.css">
    
        <div class="apresentacao">
            <h1>Bem vindo!!</h1>  
            <form action="">
                <input type="text" placeholder = "Busque um evento">
            </form>   
        </div>
        
        
        <div class="eventos">
            <h1>Eventos em Aberto:</h1>

            <div class="cards">
                @foreach($eventos as $evento)
                    <div class="card">
                        <img src="/images/apresentacao.png" alt="">
                        <h3>{{$evento->nome}}</h3>
                        <p>{{$evento->descricao}}</p>
                        <p>{{$evento->cidade}}</p>

                        @if($evento->status == 0)
                            <h4>Público</h4>
                        @else
                            <h4>Privado</h4>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        

@endsection