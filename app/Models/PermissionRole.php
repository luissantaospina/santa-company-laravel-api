<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PermissionRole extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre'
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        "updated_at",
        "created_at"
    ];

    public function permissions(): HasMany
    {
        return $this->hasMany(Permission::class, 'id', 'permiso_id');
    }
}
