<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'cliente_id',
        'codigo',
        'precio',
        'fecha_compra'
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        "updated_at",
        "created_at"
    ];

    public function client(): HasOne
    {
        return $this->hasOne(Client::class, 'id', 'cliente_id');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'order_products', 'orden_id', 'producto_id');
    }
}
