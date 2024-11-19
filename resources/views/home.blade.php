<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Gerenciamento de Tarefas</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{asset('img/logo-icon.png')}}">
    <style>
        main {
            min-height: calc(100vh - 210px);
        }
    </style>
</head>

<body>
    <!-- Cabeçalho -->
    <header class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <strong>TodoList</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre-nos.html">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="planos.html">Planos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="login/entrar.html">Entrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Fim Cabeçalho -->

    <!-- Conteúdo -->
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-4">Sobre nós</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nulla voluptas cum, voluptatum
                    ratione in expedita sit laborum incidunt nesciunt quia enim vel, eveniet assumenda perferendis magni
                    exercitationem error quam?</p>
            </div>
        </div>
    </main>
    <!-- Fim Conteúdo -->

    <!-- Rodapé -->
    <footer class="container bg-light mt-5">
        <div class="row">
            <div class="col-12 p-3 text-center">
                2024 &copy; - Todos os Direitos são reservados
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
        integrity="sha384-ROgtKpbV3z4OxWzw/g1KsTjcJoGfSddqFHI5xUIe1I1xIoO40pqYePpC+ZMZj5R9" crossorigin="anonymous"></script>
</body>

</html>
