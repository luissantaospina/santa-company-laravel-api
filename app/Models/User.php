<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Model
{
    use HasFactory;

    /**
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'login',
        'clave',
        'nombre',
        'rol_id'
    ];

    /**
     *
     * @var array<int, string>
     */
    protected $hidden = [
        "updated_at",
        "created_at"
    ];
}
