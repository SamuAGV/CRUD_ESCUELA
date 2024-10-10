<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3>Editar Alumnos</h3>
        <h5>>CRUD: Alumnos -> Editar</h5>
            <hr>
            <br>
            <center><img src="{{ url('img/'.$alumno->foto) }}" width="120px" style="border: 1px solid #000; border-radius:5px;">
            </center>
            <br>
            <form action="{{ route('alumno_salvar', ['id'=> $alumno->id_alumno]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                <h3>Datos personales</h3>
                <div class="form-floating mb-3">
                    <input type="input" class="form-control" name="nombre" value="{{ $alumno->nombre }}" id="floatingNombre" placeholder="ejemplo: Samuel Garduño"
                    aria-describedby="NombreHelp">
                    <label for="floatingNombre">Nombre</label>
                    <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo nombre(s) no es correcto</i> @endif</div>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="fn" value="{{ $alumno->fn }}" id="floatingfn" placeholder="ejemplo: 06/03/2005"
                    aria-describedby="fnHelp">
                    <label for="floatingfn">Fecha de Nacimiento</label>
                    <div id="fnHelp" class="form-text">Coloque su fecha de Nacimiento ( <i>Formato</i>: dia/mes/año )</div>
                </div>

                <div class="form-floating mb-3">
                    <input type="file" class="form-control" name="foto1" id="floatingfoto" placeholder="- - - -" aria-describedby="fotoHelp">
                    <input type="hidden" name="foto2" value=" {{ $alumno->foto}}">
                    <label for="floatingfoto">Foto</label>
                    <div id="fotoHelp" class="form-text">Busque una imagen para su perfil ( <i>Formatos</i>: jpg/png/bmp)</div>
                </div>

                <hr><br>    

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('alumnos') }}">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
            </form>

            <br><br><br>
    </div>
</body>
</html>