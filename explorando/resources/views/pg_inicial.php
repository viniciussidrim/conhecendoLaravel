<!-- frontend modelo -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Simulador Resultados</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .formatacao_tabela {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Simulador Placares</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('imoveis.create')}}">Times</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </br>


    <!-- <div class="formatacao_placares">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> -->
    <div class="formatacao_tabela">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="formatacao_tabela">
            <ol class="list-group list-group">
                <li class="list-group-item">
                    <input type="time_1" class="form-control" id="exampleFormControlInput1" placeholder="Primeiro Time">
                </li>
                <li class="list-group-item">
                    <input type="time_2" class="form-control" id="exampleFormControlInput1" placeholder="Segundo Time">
                </li>
                <li class="list-group-item">
                    <input type="time_3" class="form-control" id="exampleFormControlInput1" placeholder="Terceiro Time">
                </li>
            </ol>
            <ol class="list-group list-group">
                <li class="list-group-item">
                    <label for="exampleFormControlInput1" class="form-label">X</label>
                </li>
                <li class="list-group-item">
                    <label for="exampleFormControlInput1" class="form-label">X</label>
                </li>
                <li class="list-group-item">
                    <label for="exampleFormControlInput1" class="form-label">X</label>
                </li>
            </ol>
            <ol class="list-group list-group">
                <li class="list-group-item">
                    <input type="time_1" class="form-control" id="exampleFormControlInput1" placeholder="Primeiro Time">
                </li>
                <li class="list-group-item">
                    <input type="time_2" class="form-control" id="exampleFormControlInput1" placeholder="Segundo Time">
                </li>
                <li class="list-group-item">
                    <input type="time_3" class="form-control" id="exampleFormControlInput1" placeholder="Terceiro Time">
                </li>
            </ol>
        </div>
        </br>
        <div class="formatacao_tabela">
            <table class="table caption-top" style="text-align: center; width: 70%">
                <caption>Tabela de Resultados</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
        </div>
        <a href="listar_times"><button class="btn btn-primary">abrir</button></a>    </div>
</body>

</html>