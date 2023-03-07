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
        'client_id',
        'code',
        'price',
        'date_purchase'
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
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'order_products', 'order_id', 'product_id');
    }
}
