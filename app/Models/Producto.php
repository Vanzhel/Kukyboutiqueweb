<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca_id',
        'modelo_id',
        'talla_id',
        'color_id',
        'categoria_id',
        'sexo_id',
        'stock',
        'stock_min',
        'preciocosto',
        'precioventa',
        'ganancia',
        'oferta_id'
    ];
}
