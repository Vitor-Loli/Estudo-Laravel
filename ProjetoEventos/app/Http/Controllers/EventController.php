<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;
use App\Models\Usuarios;

class EventController extends Controller
{
    public function index(){

        $busca = request('busca');

        if($busca){
            $eventos = Eventos::where('nome', 'like', '%' . $busca . '%')->get(); 
        }else{
           $eventos = Eventos::all(); 
        }

        return view('home', ['eventos' => $eventos, 'busca' => $busca]);
    }

    public function criarEvento(){
        return view('criar-evento');
    }

    public function eventos(){

        $eventos = Eventos::all();

        return view('/eventos', ['eventos' => $eventos]);
    }

    public function store(Request $request){
        $eventos = new Eventos;

        $eventos->nome = $request->txtNome;
        $eventos->descricao = $request->txtDesc;
        $eventos->cidade = $request->txtCidade;
        $eventos->status = $request->txtStatus;
        $eventos->itens = $request->itens;
        $eventos->data = $request->txtData;

        if($request->hasFile('Imagem') && $request->file('Imagem')->isValid()){
            $requestImage = $request->Imagem;

            $extensao = $requestImage->extension();
            $nomeImagem = strtotime("now") . "." . "$extensao";
        
            $requestImage->move('images/eventos', $nomeImagem);

            $eventos->imagem = $nomeImagem;
        }

        $eventos->save();

        return  redirect('/eventos')->with('msg', 'Evento cadastrado com sucesso!');
    }

    public function show($id_evento){
        
        $eventos = Eventos::findOrFail($id_evento);

        return view('evento', ['evento' => $eventos]);
    }

    public function telaRegistrar(){

        return view('registrar');
    }

    public function registrarUsuario(Request $request){
        $usuarios = new Usuarios;

        $usuarios->nome = $request->txtNome;
        $usuarios->usuario = $request->txtUsuario;

        if($request->txtSenha == $request->txtSenhaA){
            $usuarios->senha = $request->txtSenha;
        }else{
            return redirect('/registrar')->with('msg', 'As senhas precisam ser iguais!');
        }

        $usuarios->save();
        return redirect('/registrar')->with('msg', 'Conta criada com sucesso!');
    }

    public function telalogin(){

        return view('login');
    }

    public function logarUsuario(Request $request){
        $usuarios = Usuarios::whereRaw('usuario = ? and senha = ?', [$request->txtUsuario, $request->txtSenha])->get();

        if(count($usuarios) == 0){
            return redirect('/login')->with('msg', 'Usuário ou senha incorretos!');
        }else{

            $busca = request('busca');

            if($busca){
                $eventos = Eventos::where('nome', 'like', '%' . $busca . '%')->get(); 
            }else{
               $eventos = Eventos::all(); 
            }

            return view('home', ['usuario' => $usuarios, 'eventos' => $eventos, 'busca' => $busca]);
        }
    }
}
