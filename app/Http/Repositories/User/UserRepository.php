<?php

namespace App\Http\Repositories\User;

use App\Http\DataTransferObjects\User\UserData;
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
     * @param string $email
     * @return mixed
     */
    public function findByEmail(string $email): mixed;

    /**
     * @param int $id
     * @return string
     */
    public function destroyById(int $id): string;

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
