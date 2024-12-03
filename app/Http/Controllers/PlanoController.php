<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanoController extends Controller
{
    public function index(){
        return view('admin/planos/index');
    }

    public function cadastrar(){
        return view('admin/planos/cadastrar');
    }

    public function visualizar(){
        return view('admin/planos/visualizar');
    }

    public function editar(){
        return view('admin/planos/editar');
    }

    public function excluir(){
        return view('admin/planos');
    }
}

