<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante_Entrada extends Model
{
    use HasFactory;
    protected $filliable =['nombre','estado'];
}
