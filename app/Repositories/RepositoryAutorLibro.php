<?php 

namespace App\Repositories;
use App\AutoresLibros;

class RepositoryAutorLibro 
{
	static function InsertAutoresLibros($autores, $libro)
	{
		//dd($request->all());
		foreach ($autores as $autor) {
			$autorLibro = new AutoresLibros;
			$autorLibro->autor_id_autor = $autor;
			$autorLibro->libro_id_libro = $libro->id_libro;
			$autorLibro->save();
		}
		return true;
	}
}