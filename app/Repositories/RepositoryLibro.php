<?php

namespace App\Repositories;
use App\Libro;

class RepositoryLibro
{
	static function store($request, $path)
	{
		//dd($request->all());
		$libro = new Libro;
		$libro->nombre = $request->nombre;
		$libro->edicion = $request->edicion;
		$libro->paginas = $request->paginas;
		$libro->precio = $request->precio;
		$libro->isbn = $request->isbn;
		$libro->idioma_id_idioma = $request->idioma_id_idioma;
		$libro->editorial_id_editorial = $request->editorial_id_editorial;
		$libro->descuento = $request->descuento;
		$libro->imagen = $path;
		if($libro->save()){
			return $libro;
			//return true;
		}
		return false;
	}

	static function all()
	{
		return \DB::table('libro')
            ->join('idioma', 'libro.idioma_id_idioma', '=','idioma.id_idioma')
            ->select('libro.id_libro','libro.nombre','libro.precio', 'libro.imagen', 'idioma.nombre as idioma')
            //->get();
            ->paginate(10);
        //return $libros;
	}

	static function detalle($request)
	{
		// get -> colección de datos, muchos datos.
		// first -> obtener de solo uno.
		$libro = \DB::table('libro as L')
			->join('editorial as E', 'L.editorial_id_editorial', '=', 'E.id_editorial')
			->join('idioma as I', 'L.idioma_id_idioma', '=', 'I.id_idioma')
			->select('L.nombre', 'L.edicion', 'L.paginas', 'L.precio', 'L.isbn', 'E.nombre as editorial', 'I.nombre as idioma')
			->where('L.id_libro', '=', $request->id_libro)
			->first();
		//dd($libro);
		return $libro;
	}

	static function getAutores($request)
	{
		$autores = \DB::table('autor as A')
			->join('autor_has_libro as AL', 'A.id_autor', '=', 'AL.autor_id_autor')
			->select('A.nombre')
			->where('AL.libro_id_libro', '=', $request->id_libro)
			->get();
		return $autores;
	}
}