<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mensaje;

class MensajesController extends Controller
{
    
    public function store(Request $request) {
    	/*$mensaje=\DB::table('mensaje')->insert([ //DB::table <-- Fluent
    		'nombre'=>	$request->nombre,
    		'email'=>	$request->email,
    		'mensaje'=> $request->mensaje,
    		'created_at'=> date('Y-m-d H:i:s'),
    		'updated_at'=> date('Y-m-d H:i:s')
    		]);
    	return view("website.correcto");
        */

    /*
    $mensaje = new Mensaje;

    $mensaje->nombre    = $request->nombre;
    $mensaje->email     = $request->email;
    $mensaje->mensaje   = $request->mensaje;

    $mensaje->save(); //Para guardar los datos.
    */

    $mensaje = Mensaje::create($request->all());

    return view("website.correcto");
    //return "Ok funciono";
    }
}
