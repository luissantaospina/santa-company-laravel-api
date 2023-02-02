<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    /**
     * @param string $nombre
     * @param string $email
     * @param string $password
     * @param int $rol_id
     */
    public function __construct(
        public string $nombre,
        public string $email,
        public string $password,
        public int $rol_id,
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $stringRule = 'required|string';
        return [
            'nombre' => $stringRule,
            'email' => $stringRule,
            'password' => $stringRule,
            'rol_id' => 'required|integer',
        ];
    }
}
