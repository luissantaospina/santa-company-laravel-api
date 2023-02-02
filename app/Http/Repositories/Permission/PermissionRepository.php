<?php

namespace App\Http\Repositories\Permission;

interface PermissionRepository
{
    /**
     * @param int $role
     * @return array
     */
    public function findByRole(int $role): array;
}
