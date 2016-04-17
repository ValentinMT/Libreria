<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table ="mensaje";

    protected $fillable = ['nombre','email','mensaje',]; //fillable <-- Para indicarle que campos quieres llenar.

    protected $primaryKey = 'id_mensaje';
}
