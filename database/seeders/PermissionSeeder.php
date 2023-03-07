<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        $permissions = array(
            [   'name' => config('app_permissions_constant.PERMISSIONS.REVISAR_ORDENES_COMPRA.description'), ],
            [   'name' => config('app_permissions_constant.PERMISSIONS.CARGAR_PRODUCTOS.description') ],
            [   'name' => config('app_permissions_constant.PERMISSIONS.INGRESAR_ORDEN_COMPRA.description') ],
            [   'name' => config('app_permissions_constant.PERMISSIONS.VER_ORDENES_COMPRA.description') ],
            [   'name' => config('app_permissions_constant.PERMISSIONS.ADMINISTRAR_SISTEMA.description') ],
        );
        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission['name']], $permission);
        }
    }
}
