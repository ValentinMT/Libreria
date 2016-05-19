<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Idioma;
use App\Editorial;
use App\Autor;

use App\Helpers\Filesystem;
use App\Repositories\RepositoryLibro;

class LibrosController extends Controller
{
    public function index()
    {
        return view('administrador.libros.index');
    }

    public function create()
    {
        return view('administrador.libros.create');

        /*$Idioma = Idioma::all();
        $Editorial = Editorial::all();
        $Autor = Autor::all();
        return view('administrador.libros.create',
            compact('Idioma', 'Editorial', 'Autor'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        //dd($request->all());
        //$file = $request->file('image')->getClientOriginalName(); //Obtiene el nombre de la imagen.
        $file = $request->file('image');
        
        if ($request->hasFile('image')) {
            //dd($file);
            //return Filesystem::upload($file);
            //NO USAR LOGICA DE ARCHIVOS EN UN CONTROLADOR.
            //Si existe el archivo lo vamos a almacenar.
            $filesystem = Filesystem::upload($file);
            if(!$filesystem){
                return back()->with('error-file', true);
            }
            //Una vez almacenado lo insertamos en la DB.
            $insert = RepositoryLibro::store($request, $filesystem);
        }
        return back()->with('error-file', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function idiomas()
    {
        return Idioma::all();
    }

    public function storeIdioma(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:3'
        ]);
        return Idioma::create($request->all());
    }

    public function deleteIdioma(Request $request)
    {   
        $delete = \DB::table('idioma')
            ->where('id_idioma', $request->id_idioma)
            ->delete();
        if($delete){
            return $delete;
        }
    }

    public function autores()
    {
        return Autor::all();
    }

    public function storeAutor(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:3'
        ]);
        return Autor::create($request->all());
    }

    public function deleteAutor(Request $request)
    {   
        $delete = \DB::table('autor')
            ->where('id_autor', $request->id_autor)
            ->delete();
        if($delete){
            return $delete;
        }
    }

    public function editoriales()
    {
        return Editorial::all();
    }

    public function storeEditorial(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:3'
        ]);
        return Editorial::create($request->all());
    }

    public function deleteEditorial(Request $request)
    {   
        $delete = \DB::table('editorial')
            ->where('id_editorial', $request->id_editorial)
            ->delete();
        if($delete){
            return $delete;
        }
    } 
}
