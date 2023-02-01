<?php


namespace App\Http\Repositories\User\Impl;

use App\Http\DataTransferObjects\User\UserData;
use App\Http\Repositories\User\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepositoryImpl implements UserRepository
{
    /**
     * @param UserData $userData
     * @return array
     */
    public function login(UserData $userData): array
    {
        $user = User::where('nombre', $userData->nombre)->where('clave', $userData->clave)->get();
        if ($user) {
            $response = [
                'status' => 'ok',
                'response' => $user
            ];
        } else {
            $response = [
                'status' => 'fail',
                'response' => null
            ];
        }
        return $response;
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return User::all();
    }
}

