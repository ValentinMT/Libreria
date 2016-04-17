<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()){
            //Usuario administrador.
            $tipo_usuario = Auth::user()->tipo; //Datos del usuario (tipo).
            if($tipo_usuario == "1"){
                return redirect('/administrador');
            } else {
                //Usuario cliente.
                return redirect('/');
            }
        }
        //Muestra el formulario de login.
        return view('website.acceder');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        //return $request->all();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //dd('Usuario logueado'); //Debugear la app, manda todos los datos.
            //return "Usuario logueado correctamente.";
            //return redirect()->intended('dashboard');
            $usuario = Auth::user();
            $tipo_usuario = Auth::user()->tipo; //Datos del usuario (tipo).
            if($tipo_usuario == "1"){
                $request->session()->put('administrador', $usuario);
                return redirect('/administrador');
            } 
            //Usuario cliente.
            return redirect('/');
            //return "Cliente";
        }
        return back();
    }
        //dd('Usuario no logueado');
        //echo 'password: '.Hash::make($request->password);
        //return redirect('acceder'); //Te retorna a la ruta acceder.
        //return back()->with('error', true); //back() Te deja en la ruta anterior. 
        //with() Mandar algo a la vista, 2 parámetros - nombre de variable y T o F, variables tipo flash.
        //return "Usuario no encontrado en el registro.";
}