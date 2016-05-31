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
}