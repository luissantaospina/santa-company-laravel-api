<?php

namespace App\Http\Services\User;

use App\Http\DataTransferObjects\User\UserData;

interface UserService
{
    /**
     * @param UserData $userData
     * @return array
     */
    public function login(UserData $userData): array;
}
