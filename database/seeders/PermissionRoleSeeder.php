<?php

namespace Database\Seeders;

use App\Models\PermissionRole;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionRoles = array(
            [1, 1],
            [1, 2],
            [1, 3],
            [1, 4],
            [1, 5],
            [3, 1],
            [3, 2],
            [3, 4],
            [2, 3],
            [2, 4]
        );

        foreach ($permissionRoles as $permissionRole) {
            $permission = new PermissionRole();
            $permission->rol_id = $permissionRole[0];
            $permission->permiso_id = $permissionRole[1];
            $permission->save();
        }
    }
}
