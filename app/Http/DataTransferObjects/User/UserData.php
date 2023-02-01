<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(
        public string $email,
        public string $password,
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $stringRule = 'required|string';
        return [
            'email' => $stringRule,
            'password' => $stringRule
        ];
    }
}
