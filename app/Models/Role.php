<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'guard_name',
        "updated_at",
        "created_at"
    ];
}
