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
                    <!--<img src="{{ url('img/logo_utvt.png') }}" alt="" width="45">-->
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
        <h5>> Asignacion -> Registro</h5>  
        <hr>
        <br>
        <form action="{{ route('asignacion_registrar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Asignacion de Alumno a Grupo</h3>

            <div class="input-group mb-3">
                <select class="form-select" id="id_alumno" name="id_alumno">
                    <option selected>Selecciona una opcion...</option>
                    @foreach($alumnos as $alumno)
                         <option value="{{ $alumno->id_alumno }}">{{ $alumno->nombre}}</option>
                    @endforeach
                </select>
            <label class="input-group-text" for="id_alumno">Alumnos</label>
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

            <div class="input-group mb-3">
                <select class="form-select" id="cuatrimestre" name="cuatrimestre">
                    <option selected>Selecciona una opcion...</option>
                    <option value="Primero">Primero</option>
                    <option value="Segundo">Segundo</option>
                    <option value="Tercero">Tercero</option>
                    <option value="Cuarto">Cuarto</option>
                    <option value="Quinto">Quinto</option>
                    <option value="Sexto">Sexto</option>
                    <option value="Septimo">Septimo</option>
                    <option value="Octavo">Octavo</option>
                    <option value="Noveno">Noveno</option>
                    <option value="Decimo">Decimo</option>
                    <option value="Onceavo">Onceavo</option>
                </select>
            <label class="input-group-text" for="cuatrimestre">Cuatrimestre</label>
            </div>
            <hr><br>

            <center><button type="submit" class="btn btn-success">Guardar</button></center>
        </form>
        <br><br>
        <br>

        <h1>Lista de Asignaciones de Alumnos Grupos</h1>
        <br><hr>
        <table class="table">
            <tr>
                <th>Nº</th>
                <th>Cuatrimestre</th>
                <th>Grupo</th>
                <th>Nombre</th>
                <th>Otros</th>
            </tr>
            @foreach($asignaciones as $asignacion)
            <tr>
                <td>{{ $asignacion->id_alumno_grupo }}</td>
                <td>{{ $asignacion->cuatrimestre }}</td>
                <td>{{ $asignacion->AgGrupo->nombre }}</td>
                <td>{{ $asignacion->AgAlumnos->nombre }}</td>
                <td>
                    <a href="{{ route('asignacion_borrar', ['id'=> $asignacion->id_alumno_grupo]) }}">
                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Seguro que desea borrar el registro?')">
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
                <th>Cuatrimestre</th>
                <th>Clave</th>
                <th>Grupo</th>
                <th>Nombre</th>
                <th>Otros</th>
            </tr>
            @foreach($datos as $key => $dato)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $dato->id }}</td>
                <td>{{ $dato->cuatrimestre }}</td>
                <td>{{ $dato->clave }}</td>
                <td>{{ $dato->grupo }}</td>
                <td>{{ $dato->alumno }}</td>
                <td>
                    <a href="{{ route('asignacion_borrar', ['id'=> $asignacion->id_alumno_grupo]) }}">
                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Seguro que desea borrar el registro?')">
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