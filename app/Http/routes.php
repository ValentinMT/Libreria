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

//Rutas del administrador.
Route::group(['middleware' => 'admin'], function() { 
	//get('/administrador/panel', ['middleware'=>'auth.basic','uses'=>'AdministradorController@index']);
    get('/administrador', 'AdministradorController@index');
    get('/logout', 'AdministradorController@logout');
    
    Route::resource('/administrador/libros', 'LibrosController');
    
    get('/administrador/libros/create/idiomas', 'LibrosController@idiomas');
    post('/administrador/libros/create/storeIdioma', 'LibrosController@storeIdioma');
    post('/administrador/libros/create/deleteIdioma', 'LibrosController@deleteIdioma');
    
    get('/administrador/libros/create/autores', 'LibrosController@autores');
    post('/administrador/libros/create/storeAutor', 'LibrosController@storeAutor');
    post('/administrador/libros/create/deleteAutor', 'LibrosController@deleteAutor');
    
    get('/administrador/libros/create/editoriales', 'LibrosController@editoriales');
    post('/administrador/libros/create/storeEditorial', 'LibrosController@storeEditorial');
    post('/administrador/libros/create/deleteEditorial', 'LibrosController@deleteEditorial');

    //post('/administrador/libros/idiomas', 'IdiomasController@store');
    //post('/administrador/libros/editoriales', 'EditorialesController@store');
    //post('/administrador/libros/autores', 'AutoresController@store');

    /*post('/administrador/libros/idiomas', function(){
        //Valida si se almacenó en la base de datos el nuevo idioma.
        return App\Idioma::create(Request::all());
    });

    post('/administrador/libros/editoriales', function(){
        return App\Editorial::create(Request::all());
    });

    post('/administrador/libros/autores', function(){
        return App\Autor::create(Request::all());
    });*/

    //get('/administrador/libros', 'LibrosController@index');
    //get('/administrador/libros/create', 'LibrosController@create');
	//https://styde.net/sistema-de-autenticacion-de-usuarios-en-laravel/
});

    //get('/admin/panel', ['middleware'=>'Auth.basic','uses' => 'AdminController@index']);

get('/users', function() {
	return App\User::all();
});