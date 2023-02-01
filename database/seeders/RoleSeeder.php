<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

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
            [   'nombre' => config('app_roles_constant.ROLES.ADMINISTRADOR') ],
            [   'nombre' => config('app_roles_constant.ROLES.CLIENTE') ],
            [   'nombre' => config('app_roles_constant.ROLES.USUARIO') ]
        );
        foreach ($roles as $role) {
            Role::updateOrCreate(['nombre' => $role['nombre']], $role);
        }
    }
}
