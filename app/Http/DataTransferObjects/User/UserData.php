<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    /**
     * @param string $nombre
     * @param string $login
     * @param string $clave
     * @param int $rol_id
     */
    public function __construct(
        public string $nombre,
        public string $login,
        public string $clave,
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
            'login' => $stringRule,
            'clave' => $stringRule,
            'rol_id' => 'required|integer',
        ];
    }
}
