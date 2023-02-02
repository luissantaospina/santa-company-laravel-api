<?php

namespace App\Http\Services\User\Impl;

use App\Http\DataTransferObjects\User\UserData;
use App\Http\DataTransferObjects\User\UserLoginData;
use App\Http\Repositories\User\UserRepository;
use App\Http\Services\User\UserService;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class UserService
 * @package App\Http\Controllers\User
 */
class UserServiceImpl implements UserService
{
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * UserServiceImpl constructor.
     * @param UserRepository $userRepository
    */
    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->userRepository->selectAll();
    }

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string
    {
        return $this->userRepository->destroyById($id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id): mixed
    {
        return $this->userRepository->findById($id);
    }

    /**
     * @param UserData $userData
     * @return User
     * @throws Exception
     */
    public function store(UserData $userData): User
    {
        return $this->userRepository->store($userData);
    }

    /**
     * @param int $id
     * @param UserData $userData
     * @return User
     * @throws Exception
     */
    public function update(int $id, UserData $userData): User
    {
        return $this->userRepository->updateById($id, $userData);
    }
}
