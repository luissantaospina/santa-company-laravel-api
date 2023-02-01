<?php

namespace App\Http\Repositories\User;

use App\Http\DataTransferObjects\User\UserData;
use Illuminate\Database\Eloquent\Collection;

interface UserRepository
{
    /**
     * @param UserData $userData
     * @return array
     */
    public function login(UserData $userData): array;

    /**
     * @return Collection
     */
    public function selectAll(): Collection;
}
