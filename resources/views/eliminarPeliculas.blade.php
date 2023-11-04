<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Peliculas</title>
</head>
<body>


  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Pelicula</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
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

  <tr>
      <th scope="row">{{$pelicula->codigoPelicula}}</th>
      <td>{{$pelicula->titulo}}</td>
      <td>{{$pelicula->anyoDebut}}</td>
      <td>{{$pelicula->duracion}}</td>
      <td>{{$pelicula->codigoGenero}}</td>
      <td>{{$pelicula->codigoProductor}}</td>
  </tr>


  </tbody>
</table>

      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" data-bs-dismiss="modal" href="{{route('pelicula.inicio')}}">Cancelar
        </a>
        <a class="btn btn-danger" data-bs-dismiss="modal" href="{{route('pelicula.destroy',$pelicula->codigoPelicula)}}">Eliminar
        </a>
       
      </div>
    </div>
  </div>

    
</body>
</html>