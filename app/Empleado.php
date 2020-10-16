<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'fecha_nacimiento', 'dni', 'sexo', 'celular', 'email'
    ];
}
