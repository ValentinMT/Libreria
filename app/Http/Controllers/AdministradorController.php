<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    public function index()
    {
    	return view('administrador.panel');
    }

    public function logout()
    {
    	//Destruir la variable de sesion.
    	session()->forget('administrador');

    	//Destruir todas las variables.
    	//session()->flush();

    	return redirect('/');
    }
}
