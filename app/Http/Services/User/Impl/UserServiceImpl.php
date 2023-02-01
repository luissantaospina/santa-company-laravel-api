<?php

namespace App\Http\Services\User\Impl;

use App\Http\DataTransferObjects\User\UserData;
use App\Http\Repositories\User\UserRepository;
use App\Http\Services\User\UserService;
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
     * @param UserData $userData
     * @return array
     * @throws Exception
     */
    public function login(UserData $userData): array
    {
        return $this->userRepository->login($userData);
    }
}