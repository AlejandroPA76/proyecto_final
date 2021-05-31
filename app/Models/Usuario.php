<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    //tuve que especificar la tabla usuario porque me lo tomaba en plural al quere subir datos
    protected $table = "usuario";
    protected $primaryKey = 'idUsuarioA';
    protected $fillable = ['nombre', 'apellido_p', 'apellido_m', 'rol','usuario','contrasena','avatar'];


}
