<?php

namespace App\Http\Repositories\User;

use App\Http\DataTransferObjects\User\UserData;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepository
{
    /**
     * @param int $id
     * @return User
     */
    public function findById(int $id): User;

    /**
     * @param int $id
     * @return string
     */
    public function destroyById(int $id): string;

    /**
     * @param UserData $userData
     * @return array
     */
    public function login(UserData $userData): array;

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
