<?php


namespace App\Http\Repositories\Permission\Impl;

use App\Http\Repositories\Permission\PermissionRepository;
use App\Models\PermissionRole;
use Illuminate\Support\Facades\Log;

class PermissionRepositoryImpl implements PermissionRepository
{
    /**
     * @param int $role
     * @return array
     */
    public function findByRole(int $role): array
    {
        $permissionsRole = PermissionRole::where('role_id', $role)->with('permissions')->get();
        $permissions = [];
        foreach ($permissionsRole as $valor) {
            foreach ($valor->permissions as $valor) {
                $permissions[] = $valor->name;
            }
        }
        return $permissions;
    }
}

