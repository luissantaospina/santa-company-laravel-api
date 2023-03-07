<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Permission extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'permission_id',
        'role_id'
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

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'permission_roles', 'permission_id', 'role_id');
    }
}
