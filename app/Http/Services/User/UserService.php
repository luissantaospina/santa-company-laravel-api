<?php

namespace App\Http\Services\User;

use App\Http\DataTransferObjects\User\UserData;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string;

    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id): mixed;

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
