<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     * @param int $role_id
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public int $role_id,
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $stringRule = 'required|string';
        return [
            'name' => $stringRule,
            'email' => $stringRule,
            'password' => $stringRule,
            'role_id' => 'required|integer',
        ];
    }
}
