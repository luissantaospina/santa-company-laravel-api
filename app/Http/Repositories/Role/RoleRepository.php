<?php

namespace App\Http\Repositories\Role;

use App\Http\DataTransferObjects\Role\RoleData;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

interface RoleRepository
{
    /**
     * @param int $id
     * @return Role
     */
    public function findById(int $id): Role;

    /**
     * @param int $id
     * @return string
     */
    public function destroyById(int $id): string;

    /**
     * @return Collection
     */
    public function selectAll(): Collection;

    /**
     * @param RoleData $roleData
     * @return Role
     */
    public function store(RoleData $roleData): Role;

    /**
     * @param int $id
     * @param RoleData $roleData
     * @return Role
     */
    public function updateById(int $id, RoleData $roleData): Role;
}
