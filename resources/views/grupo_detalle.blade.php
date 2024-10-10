<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Detalle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
      <div class="container">
           <h3>Detalle de Grupo</h3>
           <h5>> CRUD:Grupo -> Detalle</h5>
           <hr><hr><br>
           <b>ID: </b> {{ $grupo->id_grupo }} <br>
           <b>Nombre: </b> {{ $grupo->nombre }} <br>
           <b>Cuatrimestre: </b> {{ $grupo->cuatrimestre }} <br>
           <br>
           <a href="{{ route('grupos') }}">
            <button type="button" class="btn btn-success">Regresar</button>
           </a>
      </div>      
</body>
</html>