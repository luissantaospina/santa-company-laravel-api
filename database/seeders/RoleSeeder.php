<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            [   'name' => config('app_roles_constant.ROLES.ADMINISTRADOR') ],
            [   'name' => config('app_roles_constant.ROLES.CLIENTE') ],
            [   'name' => config('app_roles_constant.ROLES.USUARIO') ]
        );
        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role['name']], $role);
        }
    }
}
