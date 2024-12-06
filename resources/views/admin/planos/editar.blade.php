@extends('site')

@section('conteudo')

<!-- Conteúdo -->

<main class="container mt-5 mb-5">

<div class="row">

    <div class="col-sm-9 mx-auto">

        <h3 class="text-center m-4">Editar Plano</h3>

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        <form action="{{route('planos.editarCadastro',['id'=>$plano->id])}}" method="post">
        @method('put')
        @csrf    
        <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="titulo" name="titulo" id="titulo" class="form-control" value="{{old('titulo',$plano->titulo)}}"
                    placeholder="Digite o titulo" autofocus>
            @error('titulo')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="valor" name='valor' id="valor" class="form-control" value="{{old('titulo',$plano->titulo)}}"
                    placeholder="Digite o valor">

                    @error('valor')
                <small class="text-danger">{{$message}}</small>
                @enderror

            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="5">{{old('titulo',$plano->titulo)}}</textarea>

            @error('descricao')
            <small class="text-danger">{{$message}}</small>
            @enderror

            </div>

            <button class="btn btn-primary" type="submit">Salvar</button>
            <a class="btn btn-light" href="index.html">Cancelar</a>
        </form>
    </div>
</div>


</main>

<!-- Fim Conteúdo -->


@endsection
