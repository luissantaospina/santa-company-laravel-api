<?php

namespace App\Http\Services\Role;

use Illuminate\Database\Eloquent\Collection;

interface RoleService
{
    /**
     * @return Collection
     */
    public function index(): Collection;
}
