<?php

namespace App\Http\Services\Role\Impl;

use App\Http\Repositories\Role\RoleRepository;
use App\Http\Services\Role\RoleService;
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
}
