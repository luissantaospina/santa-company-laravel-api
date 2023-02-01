<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'esta_activo',
        'cantidad',
        'categoria',
        'codigo',
        'descripcion',
        'nombre',
        'precio'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        "updated_at",
        "created_at"
    ];
}
