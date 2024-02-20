@extends('layouts.main')

@section ('title', 'Eventos - HDCEvents')

@section('content')

    <link rel="stylesheet" href="/css/eventos.css">

    <div class="apresentacao">

        <h1>Aqui você pode ver seus eventos!!</h1>

        @if(count($eventos) == 0)

            <p>Você não tem nenhum evento cadastrado...</p>

        @else

            <p>Você tem um total de {{count($eventos)}} eventos cadastrados!</p>

        @endif

        <button onclick = "criarEvento()"><i class='bx bx-plus' ></i></button>
    </div>


    @if(count($eventos) != 0)
        <div class = "eventos">
            <h1>Eventos cadastrados</h1>

            <div class="cards">
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

                            <div class = "acoes">
                                <a href=""><i class='bx bxs-trash'></i></a>
                                <a href=""><i class='bx bxs-edit-alt' ></i></a>
                            </div>
                            
                        </div>
                    @endforeach
            </div>
        </div>
        

    @endif



    <script>
        function criarEvento(){
            window.location = "/eventos/create"
        }
    </script>
@endsection