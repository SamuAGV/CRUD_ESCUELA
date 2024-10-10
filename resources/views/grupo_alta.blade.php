<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Alta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3>Nuevo Registro de Grupos</h3>
        <h5>> CRUD:Grupos -> Registro</h5>
        <hr>
        <br>
        <form action="{{ route('grupo_registrar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Datos de Grupo</h3>

            <div class="form-floating mb-3">
            <label for="floatingClave">Clave</label><br><br>
                <input type="input" class="from-control" name="clave" value="{{ old('clave') }}" id="floatingclave"placeholder="ejemplo: DMS_43" aria-describedby="ClaveHelp">
                <div id="ClaveHelp" class="form-text">coloque la clave</div>
            </div>

            <div class="form-floating mb-3">
            <label for="floatingNombre">Nombre</label>
<br><br>
                <input type="input" class="from-control" name="nombre" value="{{ old('nombre') }}" id="floatingNombre"placeholder="ejemplo: TSU_Desarrollo de software multiplataforma_DSM43" aria-describedby="NombreHelp">
                <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo Nombre(s) no es correcto!!!</i>@endif</div>
            </div>

            <div class="form-floating mb-3">
                <input type="input" class="form-control" name="cuatrimestre" value="{{ old('cuatrimestre') }}" id="floatingcuatrimestre" placeholder="ejemplo: 1er "
                    aria-describedby="cuatrimestreHelp">
                <label for="floatingcuatrimestre">Cuatrimestre</label>
                <div id="cuatrimestreHelp" class="form-text">Coloque su cuatrimestre</div>
            </div>
 

            <hr><br>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('grupos') }}">
                <button type="button" class="btn bnt-danger">Cancelar</button>
            </a>
        </form>

        <br><br><br>
    </div>
    
</body>
</html>