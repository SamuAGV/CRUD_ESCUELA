<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3>Editar Grupos</h3>
        <h5>>CRUD: Grupos -> Editar</h5>
            <hr>
            <br>
            <form action="{{ route('grupo_salvar', ['id'=> $grupo->id_grupo]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                <h3>Datos personales</h3>
                <div class="form-floating mb-3">
                    <input type="input" class="form-control" name="clave" value="{{ $grupo->clave }}" id="floatingClave" placeholder="ejemplo: DSM_43"
                    aria-describedby="ClaveHelp">
                    <label for="floatingClave">Nombre</label>
                    <div id="ClaveHelp" class="form-text">@if($errors->first('clave')) <i>El campo clave(s) no es correcto</i> @endif</div>
                </div>

                <div class="form-floating mb-3">
                    <input type="input" class="form-control" name="nombre" value="{{ $grupo->nombre}}" id="floatingNombre" placeholder="ejemplo: Completo"
                    aria-describedby="nombreHelp">
                    <label for="floatingfn">Nombre</label>
                    <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo nombre(s) no es correcto</i> @endif</div>
                </div>

                <div class="form-floating mb-3">
                    <input type="input" class="form-control" name="cuatrimestre" id="floatingcuatrimestre" placeholder="1er" aria-describedby="cuatrimestreHelp">
                    <label for="floatingcuatrimestre">cuatrimestre</label>
                    <div id="cuatrimestreHelp" class="form-text">@if($errors->first('cuatrimestre')) <i>El campo nombre(s) no es correcto</i> @endif</div>
                </div>

                <hr><br>    

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('grupos') }}">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
            </form>

            <br><br><br>
    </div>
</body>
</html>