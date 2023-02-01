<?php


namespace App\Http\Repositories\User\Impl;

use App\Http\DataTransferObjects\User\UserData;
use App\Http\Repositories\User\UserRepository;
use App\Models\User;

class UserRepositoryImpl implements UserRepository
{
    /**
     * @param UserData $userData
     * @return array
     */
    public function login(UserData $userData): array
    {
        $user = User::where('email', $userData->email)->where('password', $userData->password)->get();
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
}

