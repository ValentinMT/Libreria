<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    public function index() {
    	return "ambientesController";
    }

    public function show(Request $request) {
    	//$_POST['nombre'] <-- Obsoleto :(

    	return $request->all();
    	return $request->nombre;
    	return $request->email;
    }

    public function store(Request $request) {
    	$usuario=\DB::table('usuario')->insert([
    		'nombre'=>	$request->nombre,
    		'nick'=>	$request->nick,
    		'email'=>	$request->email,
    		'password'=>$request->password,
    		'telefono'=>$request->telefono
    		]);
    	dd($usuario);
    }
}
