<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table ="autor";

    protected $fillable = ['nombre',]; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id_autor';
}
