<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>

<h1>
    Peliculas
</h1>

<table class="table">
  <thead>

    <tr>
      <th scope="col">Codigo Pelicula</th>
      <th scope="col">Titulo</th>
      <th scope="col">Año debut</th>
      <th scope="col">duracion</th>
      <th scope="col">Codigo genero</th>
      <th scope="col">Codigo productor</th>
    </tr>
  </thead>
  <tbody>

  
  @foreach($peliculas as $item)

  <tr>
      <th scope="row">{{$item->codigoPelicula}}</th>
      <td>{{$item->titulo}}</td>
      <td>{{$item->anyoDebut}}</td>
      <td>{{$item->duracion}}</td>
      <td>{{$item->codigoGenero}}</td>
      <td>{{$item->codigoProductor}}</td>
      <td>
    <a class="btn btn-success" href="{{route('pelicula.edit', $item -> codigoPelicula)}}">Editar</a>
        </td>
      <td><a class="btn btn-danger" href="{{route('pelicula.eliminar', $item -> codigoPelicula)}}">Eliminar</a></td>
    </tr>

@endforeach


  </tbody>
</table>


<div>
    <a class="btn btn-primary" href="{{route('agregar.pelicula')}}">Agregar Pelicula</a>
</div>
</body>
</html>