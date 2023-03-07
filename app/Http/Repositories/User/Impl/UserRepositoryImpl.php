<?php


namespace App\Http\Repositories\User\Impl;

use App\Http\DataTransferObjects\User\UserData;
use App\Http\Repositories\User\UserRepository;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserRepositoryImpl implements UserRepository
{
    /**
     * @param int $id
     * @return string
     * @throws Exception
     */
    public function destroyById(int $id): string
    {
        DB::beginTransaction();
        try {
            User::destroy($id);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return 'El usuario ha sido eliminado exitosamente';
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id): mixed
    {
        return User::where('id', $id)->with('role')->first();
    }

    /**
     * @param string $email
     * @return mixed
     */
    public function findByEmail(string $email): mixed
    {
        return User::where('email', $email)->with('role')->first();
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return User::with('role')->get();
    }

    /**
     * @param UserData $userData
     * @return User
     * @throws Exception
     */
    public function store(UserData $userData): User
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $userData->name;
            $user->email = $userData->email;
            $user->password = bcrypt($userData->password);
            $user->role_id = $userData->role_id;
            $user->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $user;
    }

    /**
     * @param int $id
     * @param UserData $userData
     * @return User
     * @throws Exception
     */
    public function updateById(int $id, UserData $userData): User
    {
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->fill((array)$userData);
            $user->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $user;
    }
}

