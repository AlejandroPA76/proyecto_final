<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    //tuve que especificar la tabla usuario porque me lo tomaba en plural al quere subir datos
    protected $table = "usuario";
    protected $primary_key = 'idUsuarioA';
}
