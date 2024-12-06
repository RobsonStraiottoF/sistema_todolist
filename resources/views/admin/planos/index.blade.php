@extends('site')

@section('conteudo')
<!-- Conteúdo -->

<main class="container mt-5 mb-5">

<div class="row">

    <div class="col-sm-9 mx-auto">

        <h3 class="text-center mt-4">Lista de Planos</h3>

        <div class="row">
            <div class="col-12 text-right p-3">
                <a class="btn btn-primary" href="cadastrar.html"><i class="fas fa-plus"></i>
                    Adicionar</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Valor</th>
                    <th scope="col" width="140" class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>
                <!-- Linha do Registro -->
                @foreach ($planos as $plano)
                
                

                <tr>
                    <th scope="row">{{$plano->id}}</th>
                    <td>{{$plano->titulo}}</td>
                    <td>{{$plano->valor}}</td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-light" href="{{route('planos.visualizar',['id'=>$plano->id])}}">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-primary" href="{{route('planos.editar',['id'=>$plano->id])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="index.html">
                            <i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

            @endforeach
                <!-- Final Linha do Registro -->
            </tbody>
        </table>


    </div>
</div>

</main>

<!-- Fim Conteúdo -->

@endsection