<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoresLibros extends Model
{
    protected $table ="autor_has_libro";

    protected $fillable = ['autor_id_autor','libro_id_libro']; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id';
    
    public $timestamps = false;
}
