<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table ="editorial";

    protected $fillable = ['nombre', 'telefono',]; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id_editorial';
}
