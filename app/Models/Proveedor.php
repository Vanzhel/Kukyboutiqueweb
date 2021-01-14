<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $filliable =['razonsocial','direccion','ruc','nombre_representante','telefono','e_mail'];
}
