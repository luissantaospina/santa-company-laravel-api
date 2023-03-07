<?php

namespace App\Http\DataTransferObjects\Client;

use Spatie\LaravelData\Data;

class ClientData extends Data
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $password
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
            'password' => $stringRule
        ];
    }
}
