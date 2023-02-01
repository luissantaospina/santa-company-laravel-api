<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Role\RoleData;
use App\Http\Services\Role\RoleService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    /**
     * @var RoleService
     */
    private RoleService $roleService;

    /**
     * VpcController constructor.
     * @param RoleService $roleService
     */
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json($this->roleService->destroy($id), 204);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->roleService->index());
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json($this->roleService->show($id));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->roleService->store(RoleData::from($request)), 201);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update(int $id, Request $request): JsonResponse
    {
        return response()->json($this->roleService->update($id, RoleData::from($request)), 204);
    }
}
