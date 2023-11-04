<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Peliculas</title>
</head>
<body>
    <h1>Editar Peliculas</h1>

    <form method="POST" action="{{route('pelicula.actualizar', $Pelicula->codigoPelicula)}}">

    @csrf
    @method('PUT')
    <div class=row>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Codigo Pelicula</label>
            <input type="text" class="form-control" name="codigoPelicula" id="codigoPelicula" readonly value="{{$Pelicula->codigoPelicula}}"> <!--readonly, es para no poder editar campos-->
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{$Pelicula->titulo}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Año debut</label>
            <input type="text" class="form-control" name="debut" id="debut" value="{{$Pelicula->anyoDebut}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Duracion</label>
            <input type="text" class="form-control" name="duracion" id="duracion" value="{{$Pelicula->duracion}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Codigo Genero</label>
            <input type="text" class="form-control" name="codigoGenero" id="codigoGenero" value="{{$Pelicula->codigoGenero}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Codigo productor</label>
            <input type="text" class="form-control" name = "codigoProductor" id="codigoProductor" value="{{$Pelicula->codigoProductor}}">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </form>

</body>
</html>