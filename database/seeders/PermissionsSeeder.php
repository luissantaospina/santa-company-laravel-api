<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = config('app_permissions.PERMISSIONS');
        foreach ($permissions as $permission) {
            $currentPermission = Permission::where('name', $permission['description'])->first();
            if (!isset($currentPermission)) {
                Permission::create([
                    'name' => $permission['description']
                ]);
            }
        }

        $roles = array(
            [
                'name' => config('app_roles_constant.ROLES.ADMINISTRADOR'),
                'permissions' => [
                    config('app_permissions.PERMISSIONS.REVISAR_ORDENES_COMPRA.description'),
                    config('app_permissions.PERMISSIONS.CARGAR_PRODUCTOS.description'),
                    config('app_permissions.PERMISSIONS.INGRESAR_ORDEN_COMPRA.description'),
                    config('app_permissions.PERMISSIONS.VER_ORDENES_COMPRA.description')
                ]
            ],
            [
                'name' => config('app_roles_constant.ROLES.CLIENTE'),
                'permissions' => [
                    config('app_permissions.PERMISSIONS.INGRESAR_ORDEN_COMPRA.description'),
                    config('app_permissions.PERMISSIONS.VER_ORDENES_COMPRA.description')
                ]
            ],
            [
                'name' => config('app_roles_constant.ROLES.USUARIO'),
                'permissions' => [
                    config('app_permissions.PERMISSIONS.REVISAR_ORDENES_COMPRA.description'),
                    config('app_permissions.PERMISSIONS.CARGAR_PRODUCTOS.description'),
                    config('app_permissions.PERMISSIONS.VER_ORDENES_COMPRA.description')
                ]
            ]
        );
        foreach ($roles as $roleDescription) {
            $role = Role::where('name', $roleDescription['name'])->first();
            $role->syncPermissions();
            foreach ($roleDescription['permissions'] as $permission) {
                $role->givePermissionTo($permission);
            }
            $role->save();
        }
    }
}
