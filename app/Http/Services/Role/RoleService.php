<?php

namespace App\Http\Services\Role;

use App\Http\DataTransferObjects\Role\RoleData;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

interface RoleService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string;

    /**
     * @param int $id
     * @return Role
     */
    public function show(int $id): Role;

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
    public function update(int $id, RoleData $roleData): Role;
}
