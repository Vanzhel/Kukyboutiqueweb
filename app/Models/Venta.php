<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'comprobante_id',
        'numero_serie',
        'numero_comprobante',
        'descuento',
        'totalpedido',
        'importetotal',
        'estado',
        'user_id',
        'empleado_id',
        'pedido_id',
        'envio',
        'precio_envio',
        'mediopago_id'
    ];
}
