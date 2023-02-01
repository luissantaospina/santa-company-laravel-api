<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\User\UserData;
use App\Http\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class VpcController
 * @package App\Http\Controllers\Vpc
 */
class UserController extends Controller
{
    /**
     * @var UserService
     */
    private UserService $userService;

    /**
     * VpcController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json($this->userService->destroy($id), 204);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->userService->index());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        return response()->json($this->userService->login(UserData::from($request)), 201);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json($this->userService->show($id));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->userService->store(UserData::from($request)), 201);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update(int $id, Request $request): JsonResponse
    {
        return response()->json($this->userService->update($id, UserData::from($request)), 204);
    }
}
