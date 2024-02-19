<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;
use App\Models\Usuarios;

class EventController extends Controller
{
    public function index(){

        $usuarios = Usuarios::all();

        $eventos = Eventos::all();

        return view('home', ['eventos' => $eventos]);
    }

    public function criarEvento(){
        return view('criar-evento');
    }

    public function eventos(){

        $usuarios = Usuarios::all();

        $eventos = Eventos::all();

        $eventoCount = 4;

        return view('/eventos', ['eventos' => $eventos, 'eventoCount' => $eventoCount]);
    }

    public function store(Request $request){
        $eventos = new Eventos;

        $eventos->nome = $request->txtNome;
        $eventos->descricao = $request->txtDesc;
        $eventos->cidade = $request->txtCidade;
        $eventos->status = $request->txtStatus;

        $eventos->save();

        return  redirect('/eventos');
    }
}
