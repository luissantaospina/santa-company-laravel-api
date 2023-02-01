<?php

namespace App\Http\Services\User;

use App\Http\DataTransferObjects\User\UserData;
use Illuminate\Database\Eloquent\Collection;

interface UserService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param UserData $userData
     * @return array
     */
    public function login(UserData $userData): array;
}
