<?php

namespace App\Http\Services\Role\Impl;

use App\Http\DataTransferObjects\Role\RoleData;
use App\Http\Repositories\Role\RoleRepository;
use App\Http\Services\Role\RoleService;
use App\Models\Role;
use Exception;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class RoleService
 * @package App\Http\Controllers\Role
 */
class RoleServiceImpl implements RoleService
{
    /**
     * @var RoleRepository
     */
    private RoleRepository $roleRepository;

    /**
     * RoleServiceImpl constructor.
     * @param RoleRepository $roleRepository
    */
    public function __construct(
        RoleRepository $roleRepository
    )
    {
        $this->roleRepository = $roleRepository;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->roleRepository->selectAll();
    }

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string
    {
        return $this->roleRepository->destroyById($id);
    }

    /**
     * @param int $id
     * @return Role
     */
    public function show(int $id): Role
    {
        return $this->roleRepository->findById($id);
    }

    /**
     * @param RoleData $roleData
     * @return Role
     * @throws Exception
     */
    public function store(RoleData $roleData): Role
    {
        return $this->roleRepository->store($roleData);
    }

    /**
     * @param int $id
     * @param RoleData $roleData
     * @return Role
     * @throws Exception
     */
    public function update(int $id, RoleData $roleData): Role
    {
        return $this->roleRepository->updateById($id, $roleData);
    }
}
