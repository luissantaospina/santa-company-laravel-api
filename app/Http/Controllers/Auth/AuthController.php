<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Permission\PermissionRepository;
use App\Http\Repositories\User\UserRepository;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * @var PermissionRepository
     */
    private PermissionRepository $permissionRepository;

    /**
     * Create a new AuthController instance.
     * @return void
     */
    public function __construct(UserRepository $userRepository, PermissionRepository $permissionRepository)
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        $this->userRepository = $userRepository;
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * Get a JWT via given credentials.
     * @return JsonResponse
     */
    public function login(): JsonResponse
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token, $credentials);
    }

    /**
     * Log the user out (Invalidate the token).
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     * @param string $token
     * @param $credentials
     * @return JsonResponse
     */
    protected function respondWithToken(string $token, $credentials): JsonResponse
    {
        $user = $this->userRepository->findByEmail($credentials['email']);
        $permissions = $this->permissionRepository->findByRole($user->role->id);
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => $user,
            'permissions' => $permissions
        ]);
    }
}
