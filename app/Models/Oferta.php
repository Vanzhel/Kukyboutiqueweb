<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_oferta_id',
        'porcentaje_descuento',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];
}
