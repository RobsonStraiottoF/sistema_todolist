@extends('site')

@section('conteudo')

<!-- Conteúdo -->

<main class="container mt-5 mb-5">

<div class="row">

    <div class="col-sm-9 mx-auto">

        <h3 class="text-center mt-4">Detalhes da Página</h3>

        <table class="table table-striped mt-3">
            <tr>
                <th width="180">Titulo</th>
                <td>Sobre nós</td>
            </tr>
            <tr>
                <th width="100">Slug</th>
                <td>sobre-nos</td>
            </tr>
            <tr>
                <th width="100">Descrição</th>
                <td>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt possimus veritatis
                    deleniti quam, nam asperiores a amet, iure inventore reprehenderit fugiat non. Quis
                    veritatis harum aliquam ex quod et excepturi?
                </td>
            </tr>
        </table>

        <div class="row">
            <div class="col-12 p-3">
                <a class="btn btn-primary" href="editar.html">Editar</a>
                <a class="btn btn-light" href="index.html">Cancelar</a>
            </div>
        </div>
    </div>
</div>

</main>

<!-- Fim Conteúdo -->


@endsection