<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Productor;
use Illuminate\Http\Request;
use App\Models\pelicula;
use PhpParser\Node\Expr\FuncCall;

class peliculasController extends Controller
{
    public function index(){
        $peliculas = pelicula::all();
        return view('peliculas', compact('peliculas'));
    }

    public function crear() {
        $generos = Genero::orderBy('descripcion')->take(5)->get();
        $productores = Productor::orderBy('nombre')->take(5)->get();
        return view('crearPeliculas', compact('generos', 'productores'));
    }

    public function store(Request $request ){
        $nvaPelicula = new pelicula();
        $nvaPelicula -> codigoPelicula = $request->input('codigoPelicula');
        $nvaPelicula -> titulo = $request->input('titulo');
        $nvaPelicula -> anyoDebut = $request->input('debut');
        $nvaPelicula -> duracion = $request->input('duracion');
        $nvaPelicula -> codigoGenero = $request->input('genero');
        $nvaPelicula -> codigoProductor = $request->input('productor');

        $nvaPelicula ->save();
        return redirect()->route('pelicula.inicio');
    }

    public function edit ($id){
        $Pelicula = pelicula::find($id);
        return view ('edicionPeliculas', compact('Pelicula'));
    }

    public Function actualizar(Request $request, $id){
        
        $pelicula = Pelicula::find($id);        
        $pelicula->titulo = $request->input('titulo');
        $pelicula->anyoDebut = $request->input('debut');
        $pelicula->duracion  = $request->input('duracion');
        $pelicula->codigoGenero = $request->input('codigoGenero');
        $pelicula->codigoProductor = $request->input('codigoProductor');

        $pelicula->update();

        return redirect()->route('pelicula.inicio');
    }

    public function eliminar ($id){
        $pelicula = Pelicula::find($id);
        return view('eliminarPeliculas', compact('pelicula'));
    }

    public function destroy ($id){
        $pelicula = Pelicula::find($id);
        $pelicula->delete();

        return redirect()->route('pelicula.inicio');
    }
}
