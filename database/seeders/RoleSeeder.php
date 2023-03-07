<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
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
