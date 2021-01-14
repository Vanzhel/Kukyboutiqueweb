<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'comprobante_entrada_id',
        'numero_comprobante',
        'costo_total',
        'proveedor_id'
    ];
}
