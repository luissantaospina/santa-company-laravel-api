<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
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
        return $this->hasOne(Client::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'role_id');
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'permission_roles', 'role_id', 'permission_id');
    }
}
