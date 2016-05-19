<?php

namespace App\Helpers;

class Filesystem
{
	static function upload($file)
	{
		//dd("Estamos en un Helper");
		//Subir la imagen al servidor.
        //$path = public_path().'/imagenes/libros'; //Ruta destino, donde se guardará la imagen.
        $path = '/imagenes/libros';
        $nombre = $file->getClientOriginalName(); //Obtiene el nombre de la imagen.
        if($file->move(public_path().$path, $nombre)){ //Sube y almacena la imagen a la carpeta indicada (UPLOAD).
            //$ruta = $path.'/'.$nombre; //Ruta que se almacena en la base.
            return $path .= '/'.$nombre;;
        }
        return $path = false; 
	}
}