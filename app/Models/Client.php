<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'login',
        'clave',
        'nombre',
        'rol_id'
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'clave',
        "updated_at",
        "created_at",
        'rol_id'
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'rol_id', 'id');
    }
}
