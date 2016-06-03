<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\{Idioma, Editorial, Autor, Libro};

use App\Helpers\Filesystem;
use App\Repositories\{RepositoryLibro, RepositoryAutorLibro};

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
        //Validar Idioma, Editorial y Autor(es).
        //dd($request->all());

        //String "1,2,3"
        $id_autor = explode(',', $request->id_autores); //Array [1,2,3]

        //dd($id_autor);

        // 1,2
        /*$id = "";
        for($i = 0; $i < strlen($id_autor); $i++){
            if($id_autor[$i] != ','){
                $id .= $id_autor[$i];
                // $id = 2
            } else {
                //Insertamos en la base de datos.

                // $id = 1
            }

            if($i == strlen($id_autores) - 1){
                //Insertar $id.
                //explode(delimiter, string);
            }
        }*/
        /*idioma_id_idioma
        editorial_id_editorial
        autor_id_autor*/
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

            if(is_object($insert)){
                $autores_libros = RepositoryAutorLibro::InsertAutoresLibros($id_autor, $insert);
                return back()->with('success',true);
            }
            return back()->with('error',false);
        }
        return back()->with('error-file', true);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function libros(){
        //return Libro::all();
        /*
        $libros = \DB::table('libro')
            ->join('idioma', 'libro.idioma_id_idioma', '=','idioma.id_idioma')
            ->select('libro.id_libro','libro.nombre','libro.precio', 'libro.imagen', 'idioma.nombre as idioma')
            //->get();
            ->paginate(3);
        return view('website.tienda', compact('libros'));
        */
        $libros = RepositoryLibro::all();
        return view('website.tienda', compact('libros'));
    }

    public function detalle(Request $request)
    {
        //return $request->all();
        $libro = RepositoryLibro::detalle($request);
        $autores = RepositoryLibro::getAutores($request);
        //return ['libro' => $libro];
        return compact('libro','autores');
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
