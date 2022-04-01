<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public $fillable=['matricula', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'fechaNacimiento', 'correo', 'celular', 'calle', 'colonia', 'codigoPostal'];
}
