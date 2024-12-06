<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    
    public function index(){
        $planos = Plano::all();
        return view('admin/planos/index',compact('planos'));
    }

    public function cadastrar(){
        return view('admin/planos/cadastrar');
    }

    public function visualizar($id){
        $plano = Plano::findOrFail($id);
        return view('admin/planos/visualizar',compact('plano'));
    }

    public function salvarCadastro(Request $request){

        $request->validate([
            'titulo'=>'required|string|max:100',
            'descricao'=>'required',
            'valor'=>'required'
        ]);

        $plano = new Plano();
        $plano->titulo = $request->titulo;
        $plano->descricao = $request->descricao;
        $plano->valor = $request->valor;
        $plano->save();

        return redirect()->route('planos.index')->with
        (['mensagem','Cadastro realizado com sucesso!']);
    }


    public function editar($id){
        $plano = Plano::findOrFail($id); 
        return view('admin/planos/editar',compact('plano'));
    }

    public function editarCadastro(Request $request,$id){
        
        $request->validate([
            'titulo'=>'required|string|max:100',
            'descricao'=>'required',
            'valor'=>'required'
        ]);

        $plano =  Plano::findOrFail($id);
        $plano->titulo = $request->titulo;
        $plano->descricao = $request->descricao;
        $plano->valor = $request->valor;
        $plano->save();

        return redirect()->route('planos.index')->with
        (['mensagem','Cadastro editado com sucesso!']);
    }

    public function excluir(){
        return view('admin/planos');
    }
}

