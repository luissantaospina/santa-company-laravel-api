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
        'is_active',
        'amount',
        'category',
        'code',
        'description',
        'name',
        'price'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        "updated_at",
        "created_at"
    ];
}
