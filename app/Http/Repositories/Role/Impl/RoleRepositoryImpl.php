<?php


namespace App\Http\Repositories\Role\Impl;

use App\Http\Repositories\Role\RoleRepository;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

class RoleRepositoryImpl implements RoleRepository
{
    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Role::all();
    }
}

