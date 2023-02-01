<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Permission extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'permiso_id',
        'rol_id'
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
        return $this->hasOne(User::class, 'id', 'rol_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_roles', 'permiso_id', 'rol_id')->with;
    }
}
