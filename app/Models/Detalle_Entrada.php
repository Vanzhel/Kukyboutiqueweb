<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Entrada extends Model
{
    use HasFactory;
    protected $fillable = [
        'entrada_id',
        'producto_id',
        'precio_compra',
        'precio_venta',
        'cantidad',
        'descuento',
        'importe',
    ];
}
