<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lista de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
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
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    <div class="container">
        <br><br>
        <br>
        <h3>Lista de Alumnos del DSM-43</h3>
        <h5>> CRUD:Alumnos</h5>
        <hr>
        <p style="text-align: right;">
            <a href="{{ route('alumno_alta') }}">
                <button type="button" class="btn btn-success">Nuevo Registro Alumno</button>

            </a>
        </p>
        <hr><br>
        <table class="table">
            <tr>
                <th>Foto</th>
                <th>Nº</th>
                <th>Nombre</th>
                <th>F.N</th>
                <th>Otros</th>
            </tr>
            @foreach($alumnos as $alumno)
                 <tr>
                    <td><img src="{{ url('img/'.$alumno->foto) }}" style="width: 30px; height: 30px;"></td>
                    <td>{{ $alumno->id_alumno }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->fn }}</td>
                    <td>
                        <a href="{{ route('alumno_detalle',['id' => $alumno->id_alumno]) }}">
                            <button type="button" class="btn btn-info btn-sm">Detalle</button>
                        </a>

                        <a href="{{ route('alumno_editar',['id' => $alumno->id_alumno]) }}">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>

                        <a href="{{ route('alumno_borrar',['id' => $alumno->id_alumno]) }}">
                        <button type="button" class="btn btn-danger">Borrar</button>
                        </a>
                    </td>
                 </tr>
            @endforeach
        </table>
    </div>
</body>
</html>