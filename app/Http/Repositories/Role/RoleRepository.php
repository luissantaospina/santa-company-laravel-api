<?php

namespace App\Http\Repositories\Role;

use Illuminate\Database\Eloquent\Collection;

interface RoleRepository
{
    /**
     * @return Collection
     */
    public function selectAll(): Collection;
}
