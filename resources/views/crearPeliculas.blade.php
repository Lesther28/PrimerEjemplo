<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Peliculas</title>
</head>
<body>
    <h1>Agregar Peliculas</h1>

    <form method="POST" action="{{route('pelicula.store')}}">

    @csrf
    @method('POST')
    <div class=row>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Codigo Pelicula</label>
            <input type="text" class="form-control" name="codigoPelicula" id="codigoPelicula" placeholder="Codigo Pelicula">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Año debut</label>
            <input type="text" class="form-control" name="debut" id="debut" placeholder="Año debut">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Duracion</label>
            <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duracion">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Codigo Genero</label>
            <select name="genero">
            <option value="" disabled selected>Selecciona un genero</option>
                @foreach($generos as $genero)

                    <option value= {{$genero -> codigoGenero}} >{{$genero->descripcion}}</option>

                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Codigo productor</label>
            <select name="productor" >
            <option value="" disabled selected>Selecciona un productor</option>
                @foreach($productores as $item)

                    <option value= {{$item -> codigoProductor}} >{{$item->nombre}}</option>

                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </form>

</body>
</html>