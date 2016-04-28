<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table ="idioma";

    protected $fillable = ['nombre',]; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id_idioma';
}
