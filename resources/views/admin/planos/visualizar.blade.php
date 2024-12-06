@extends('site')

@section('conteudo')

 <!-- Conteúdo -->

 <main class="container mt-5 mb-5">

<div class="row">

    <div class="col-sm-9 mx-auto">

        <h3 class="text-center mt-4">Detalhes do Plano</h3>

        <table class="table table-striped mt-3">
            <tr>
                <th width="180">Título</th>
                <td>{{$plano->titulo}}</td>
            </tr>
            <tr>
                <th width="100">Valor</th>
                <td>{{$plano->valor}}</td>
            </tr>
            <tr>
                <th width="100">Descrição</th>
                <td>{!!$plano->descricao!!}</td>
            </tr>
        </table>

        <div class="row">
            <div class="col-12 p-3">
                <a class="btn btn-primary" href="editar.html">Editar</a>
                <a class=" btn btn-light" href="index.html">Cancelar</a>
            </div>
        </div>
    </div>
</div>

</main>

<!-- Fim Conteúdo -->

@endsection