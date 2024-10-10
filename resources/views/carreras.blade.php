<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lista de Carreras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
        <h3>Lista de Carreras de la UTVT</h3>
        <h5>> CRUD:Carreras</h5>
        <hr>
        <p style="text-align: right;">
            <a href="{{ route('carrera_alta') }}">
            <button type="button" class="btn btn-success">Nuevo Registro De Carrera</button>
            </a>
        </p>
        <hr><br>
        <table class="table">
            <tr>
                <th>Nº</th> 
                <th>Clave</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Otros</th>
            </tr>
            @foreach($carreras as $carrera)
                 <tr>
                    <td>{{ $carrera->id_carrera }}</td>
                    <td>{{ $carrera->clave }}</td>
                    <td>{{ $carrera->nombre }}</td>
                    <td>{{ $carrera->detalle }}</td>

                    <td>
                        <a href="{{ route('carrera_detalle',['id' => $carrera->id_carrera]) }}">
                        <button type="button" class="btn btn-info btn-sm">Detalle</button>
                        </a>

                        <a href="{{ route('carrera_editar',['id' => $carrera->id_carrera]) }}">
                        <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>

                        <a href="{{ route('carrera_borrar',['id' => $carrera->id_carrera]) }}">
                        <button type="button" class="btn btn-danger">Borrar</button>
                        </a>
                    </td>
                 </tr>
            @endforeach
        </table>
    </div>
</body>
</html>