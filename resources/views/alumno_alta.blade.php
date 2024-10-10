<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos Alta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h3>Nuevo Registro de Alumnos</h3>
        <h5>> CRUD:Alumnos -> Registro</h5>
        <hr>
        
        <form action="{{ route('alumno_registrar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Datos personales</h3>
<br>
            <div class="form-floating mb-3">
                <br>
                <br>
                <input type="input" class="form-control" name="nombre" value="{{ old('nombre') }}" id="floatingNombre"  aria-describedby="NombreHelp" placeholder="ejemplo: Samuel Garduño">
                <label for="floatingNombre">Nombre</label>
                <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo Nombre(s) no es correcto!!!</i>@endif</div>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="fn" value="{{ old('fn') }}" id="floatingfn" placeholder="ejemplo: 06/03/2005"
                    aria-describedby="fnHelp">
                <label for="floatingfn">Fecha de Nacimiento</label>
                <div id="fnHelp" class="form-text">Coloque su fecha de Nacimiento (<i>Formato</i>: día/mes/año)</div>
            </div>

            <div class="from-floating mb-3">
                <input type="file" class="form-control" name="foto" placeholder="- - -" id="floatingFoto"
                aria-describedby="fotoHelp" >
                <label for="floatingfoto">Foto</label>
                <div id="fotoHelp" class="form-text">Busqe una imagen para su perfil ( <i>Formatos:</i>: jpg/png/bmp )</div>
            </div>  

            <hr><br>

            <button type="sumit" class="btn btn-primary mr-2">Guardar</button>
            <a href="{{ route('alumnos') }}">
            <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>

        <br><br><br>
    </div>
    
</body>
</html>