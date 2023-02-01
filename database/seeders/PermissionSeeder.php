<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = array(
            [   'nombre' => config('app_permissions_constant.PERMISSIONS.REVISAR_ORDENES_COMPRA.description'), ],
            [   'nombre' => config('app_permissions_constant.PERMISSIONS.CARGAR_PRODUCTOS.description') ],
            [   'nombre' => config('app_permissions_constant.PERMISSIONS.INGRESAR_ORDEN_COMPRA.description') ],
            [   'nombre' => config('app_permissions_constant.PERMISSIONS.VER_ORDENES_COMPRA.description') ]
        );
        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['nombre' => $permission['nombre']], $permission);
        }
    }
}
