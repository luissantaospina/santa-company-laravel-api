<?php

namespace App\Http\Repositories\User;

use App\Http\DataTransferObjects\User\UserData;
use App\Http\DataTransferObjects\User\UserLoginData;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepository
{
    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id): mixed;

    /**
     * @param int $id
     * @return string
     */
    public function destroyById(int $id): string;

    /**
     * @param UserLoginData $userLoginData
     * @return array
     */
    public function login(UserLoginData $userLoginData): array;

    /**
     * @return Collection
     */
    public function selectAll(): Collection;

    /**
     * @param UserData $userData
     * @return User
     */
    public function store(UserData $userData): User;

    /**
     * @param int $id
     * @param UserData $userData
     * @return User
     */
    public function updateById(int $id, UserData $userData): User;
}
