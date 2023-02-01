<?php

namespace App\Http\DataTransferObjects\Client;

use Spatie\LaravelData\Data;

class ClientData extends Data
{
    /**
     * @param string $nombre
     * @param string $login
     * @param string $clave
     * @param int $rol
     */
    public function __construct(
        public string $nombre,
        public string $login,
        public string $clave,
        public int $rol,
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
            'rol' => 'required|integer',
        ];
    }
}
