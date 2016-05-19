<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table ="libro";

    protected $fillable = ['nombre','edicion','paginas','precio','isbn','idioma_id_idioma','editorial_id_editorial','descuento','imagen']; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id_libro';
    
    public $timestamps = false;
}
