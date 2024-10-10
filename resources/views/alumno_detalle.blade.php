<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno Detalle</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
      <div class="container">
           <h3>Detalle de Alumno</h3>
           <h5>> CRUD:Alumnos -> Detalle</h5>
           <hr><br>
           <img src="{{ url('/img/'.$alumno->foto) }}" style="width: 200px;"> {{ url('img/'.$alumno->foto) }}<br>
           <br>
           <br><a href="{{ url('/img/'.$alumno->foto) }}"target="_blank">
           <button type= "button" class="btn btn-succes">Archivo</button>
           </a><br>
           <hr>
           <b>ID: </b> {{ $alumno->id_alumno }} <br>
           <b>Nombre: </b> {{ $alumno->nombre }} <br>
           <b>Fecha de Nacimiento: </b> {{ $alumno->fn }} <br>
           <br>
           <a href="{{ route('alumnos') }}">
            <button type="button" class="btn btn-success">Regresar</button>
           </a>
      </div>      
</body>
</html>