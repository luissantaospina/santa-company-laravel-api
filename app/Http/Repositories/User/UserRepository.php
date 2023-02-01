<?php

namespace App\Http\Repositories\User;

use App\Http\DataTransferObjects\User\UserData;

interface UserRepository
{
    /**
     * @param UserData $userData
     * @return array
     */
    public function login(UserData $userData): array;
}
