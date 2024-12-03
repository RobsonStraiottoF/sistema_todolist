@extends('site')

@section('conteudo')
<!-- Conteúdo -->

<main class="container mt-5 mb-5">

<div class="row">

    <div class="col-sm-9 mx-auto">

        <h3 class="text-center mt-4">Lista de Páginas</h3>

        <div class="row">
            <div class="col-12 text-right p-3">
                <a class="btn btn-primary" href="cadastrar.html">
                    <i class="fas fa-plus"></i>
                    Adicionar</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">slug</th>
                    <th scope="col" width="140" class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>
                <!-- Linha do Registro -->

                <tr>
                    <th scope="row">1</th>
                    <td>Sobre nós</td>
                    <td>sobre-nos</td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-light" href="visualizar.html">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-primary" href="editar.html">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger deletar" href="index.html">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                <!-- Final Linha do Registro -->
            </tbody>
        </table>


    </div>
</div>

</main>

<!-- Fim Conteúdo -->
@endsection