<?php


namespace App\Http\Repositories\Role\Impl;

use App\Http\DataTransferObjects\Role\RoleData;
use App\Http\Repositories\Role\RoleRepository;
use App\Models\Role;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RoleRepositoryImpl implements RoleRepository
{
    /**
     * @param int $id
     * @return string
     * @throws Exception
     */
    public function destroyById(int $id): string
    {
        DB::beginTransaction();
        try {
            Role::destroy($id);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return 'El role ha sido eliminado exitosamente';
    }

    /**
     * @param int $id
     * @return Role
     */
    public function findById(int $id): Role
    {
        return Role::findOrFail($id);
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Role::all();
    }

    /**
     * @param RoleData $roleData
     * @return Role
     * @throws Exception
     */
    public function store(RoleData $roleData): Role
    {
        DB::beginTransaction();
        try {
            $role = new Role();
            $role->fill((array)$roleData);
            $role->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $role;
    }

    /**
     * @param int $id
     * @param RoleData $roleData
     * @return Role
     * @throws Exception
     */
    public function updateById(int $id, RoleData $roleData): Role
    {
        DB::beginTransaction();
        try {
            $role = Role::findOrFail($id);
            $role->fill((array)$roleData);
            $role->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $role;
    }
}

