<?php

get('/', function () {
    //return view('home');
    return view('website.index');
    //return "Usando Git"; //Cambio realizado para crear la versión 2.
});

get('/tienda', function() {
	return view('website.tienda');
});

get('/carrito', function() {
	return view('website.carrito');
});

get('/acerca', function() {
	return view('website.acerca');
});

get('/contacto', function() {
	return view('website.contacto');
});

//get('/acceder', function() {
//	return view('website.acceder');
//});

get('/registro', function() {
	return view('website.registro');
});

//Ruta para el formulario.
post('/form', 'ambientesController@store');

//Manejo de controladores, es @index, porque este es el nombre del método.
get('/controller', 'ambientesController@index');

get('/usuario', function(){
	$usuario = \DB::table('usuario')->insert([
    	'nombre' => 'Mariana Reyes',
    	'nick' => 'mariana',
    	'email' => 'mariana6@hotmail.com',
    	'password' => \Hash::make('holi'),
    	'telefono' => '3121234567',
    	'tipo' => 2
    ]);
    return 'Ok';
});

get('/acceder', 'LoginController@index');

post('/mensajes', 'MensajesController@store');

post('/login', 'LoginController@store');

get('/administrador/panel', 'AdministradorController@index');

Route::group(['middleware' => 'admin'], function() { 
	//get('/administrador/panel', ['middleware'=>'auth.basic','uses'=>'AdministradorController@index']);
    get('/administrador', 'AdministradorController@index');
    get('/logout', 'AdministradorController@logout');
    Route::resource('/administrador/libros', 'LibrosController');

    //post('/administrador/libros/idiomas', 'IdiomasController@store');
    //post('/administrador/libros/editoriales', 'EditorialesController@store');
    //post('/administrador/libros/autores', 'AutoresController@store');

    post('/administrador/libros/idiomas',function(){
        if(App\Idioma::create(Request::all())){
            return redirect("/administrador/libros/create");
        }
    });

    post('/administrador/libros/editoriales',function(){
        if(App\Editorial::create(Request::all())){
            return redirect("/administrador/libros/create");
        }
    });

    /*get('/administrador/libros/autores',function(){
        return App\Autor::all();
    });*/
    post('/administrador/libros/autores',function(){
        if(App\Autor::create(Request::all())){
            return redirect("/administrador/libros/create");
        }
    });

    //get('/administrador/libros', 'LibrosController@index');
    //get('/administrador/libros/create', 'LibrosController@create');
	//https://styde.net/sistema-de-autenticacion-de-usuarios-en-laravel/
});

    //get('/admin/panel', ['middleware'=>'Auth.basic','uses' => 'AdminController@index']);

get('/users', function() {
	return App\User::all();
});