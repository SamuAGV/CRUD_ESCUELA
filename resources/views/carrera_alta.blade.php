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
        <h3>Nuevo Registro de Carreras</h3>
        <h5>> CRUD:Carreras -> Registro</h5>
        <hr>
        <br>
        <form action="{{ route('carrera_registrar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Datos de Carrera</h3>

            <div class="form-floating mb-3">
                <input type="input" class="from-control" name="clave" value="{{ old('clave') }}" id="floatingclave"
                    placeholder="ejemplo: DMS" aria-describedby="ClaveHelp">
                <label for="floatingClave">Clave</label>
                <div id="ClaveHelp" class="form-text">Coloque la clave</div>
            </div>

            <div class="form-floating mb-3">
                <input type="input" class="from-control" name="nombre" value="{{ old('nombre') }}" id="floatingNombre"
                    placeholder="ejemplo: Desarrollo de Software Multiplataforma" aria-describedby="NombreHelp">
                <label for="floatingNombre">Nombre</label>
                <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo Nombre(s) no es correcto!!!</i>@endif</div>
            </div>

            <div class="form-floating mb-3">
                <input type="input" class="form-control" name="detalle" value="{{ old('detalle') }}" id="floatingdetalle" placeholder="ejemplo: Que hacenos en la carrera "
                    aria-describedby="detalleHelp">
                <label for="floatingdetalle">Detalle</label>
                <div id="detalleHelp" class="form-text">Coloque su cuatrimestre</div>
            </div>
 

            <hr><br>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('carreras') }}">
            <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>

        <br><br><br>
    </div>
    
</body>
</html>