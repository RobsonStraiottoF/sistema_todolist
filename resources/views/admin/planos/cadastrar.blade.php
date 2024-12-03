@extends('site')

@section('conteudo')

<!-- Conteúdo -->

<main class="container mt-5 mb-5">

<div class="row">

    <div class="col-sm-9 mx-auto">

        <h3 class="text-center m-4">Cadastrar Página</h3>

        <form action="#" method="post">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="titulo" name="titulo" id="titulo" class="form-control" value=""
                    placeholder="Digite o titulo" autofocus>
                <small class="text-danger">Campo obrigatório</small>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="slug" name='slug' id="slug" class="form-control" value=""
                    placeholder="Digite o Slug">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="5"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Salvar</button>
            <a class="btn btn-light" href="index.html">Cancelar</a>
        </form>
    </div>
</div>


</main>

<!-- Fim Conteúdo -->

@endsection