<?php

namespace App\Http\Services\User;

use App\Http\DataTransferObjects\User\UserData;
use App\Http\DataTransferObjects\User\UserLoginData;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param UserLoginData $userLoginData
     * @return array
     */
    public function login(UserLoginData $userLoginData): array;

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string;

    /**
     * @param int $id
     * @return User
     */
    public function show(int $id): User;

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
    public function update(int $id, UserData $userData): User;
}
