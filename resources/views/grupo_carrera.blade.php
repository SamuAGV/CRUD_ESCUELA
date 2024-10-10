<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <!----------- Navbar: inicio------------------------------------------------->
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img src="{{ url('img/logo_utvt.png') }}" alt="" width="45">
                    TSU-DSM: 43
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('alumnos') }}">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('carreras') }}">Carreras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('grupos') }}">Grupos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('asignacion') }}">Alumno a Grupo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('grupo_carrera') }}">Grupo a Carrera</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!----------- Navbar: inicio------------------------------------------------->
        <br><br>
        <br>
        <h3>Alumno a Grupo</h3>
        <h5>> Asignacion -> Registro1 </h5>  
        <hr>
        <br>
        <form action="{{ route('grc_registrar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Asignacion de Grupo a Carrera</h3>

            <div class="input-group mb-3">
                <select class="form-select" id="id_carrera" name="id_carrera">
                    <option selected>Selecciona una opcion...</option>
                    @foreach($carreras as $carrera)
                         <option value="{{ $carrera->id_carrera }}">{{ $carrera->nombre}}</option>
                    @endforeach
                </select>
            <label class="input-group-text" for="id_carrera">Carreras</label>
            </div>

            <div class="input-group mb-3">
                <select class="form-select" id="id_grupo" name="id_grupo">
                    <option selected>Selecciona una opcion...</option>
                    @foreach($grupos as $grupo)
                         <option value="{{ $grupo->id_grupo }}">{{ $grupo->nombre}}</option>
                    @endforeach
                </select>
            <label class="input-group-text" for="id_grupo">Grupos</label>
            </div>

            <hr><br>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <br><br>
        <br>

        <h1>Lista de Asignaciones de Grupos a Carreras</h1>
        <br><hr>
        <table class="table">
            <tr>
                <th>Nº</th>
                <th>Grupo</th>
                <th>Carrera</th>
                <th>Otros</th>
            </tr>
            @foreach($grupo_carreras as $grupo_carrera)
            <tr>
                <td>{{ $grupo_carrera->id_grupo_carrera }}</td>
                <td>{{ $grupo_carrera->AgGrupo->nombre }}</td>
                <td>{{ $grupo_carrera->AgCarrera->nombre }}</td>
                <td>
                    <a href="{{ route('grc_borrar', ['id'=> $grupo_carrera->id_grupo_carrera]) }}">
                        <button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Seguro que desea borrar el registro?')">
                            Borrar
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>

        <br><hr><br>
        <h1>Lista de Asignaciones de Alumnos Grupos 2</h1>
        <br><hr>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Nº</th>
                <th>Grupo</th>
                <th>Carrera</th>
                <th>Otros</th>
            </tr>
            @foreach($datos as $key => $dato)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $grupo_carrera->id_grupo_carrera }}</td>
                <td>{{ $grupo_carrera->AgGrupo->nombre }}</td>
                <td>{{ $grupo_carrera->AgCarrera->nombre }}</td>
                <td>
                    <a href="{{ route('grc_borrar', ['id'=> $grupo_carrera->id_grupo_carrera]) }}">
                        <button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Seguro que desea borrar el registro?')">
                            Borrar
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        <br><hr><br>

        <br><br><br>
    </div>
    <script>
        $( '#multiple-select-field' ).select2( {
            theme: "bootstrap-5",
            width: $(this).data( 'width' ) ? $(this).data( 'width') : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ),
            closeOnSelect: false,
        } );
    </script>
</body>
</html>