<?php

namespace App\Http\DataTransferObjects\Client;

use Spatie\LaravelData\Data;

class ClientData extends Data
{
    /**
     * @param string $nombre
     * @param string $login
     * @param string $clave
     */
    public function __construct(
        public string $nombre,
        public string $login,
        public string $clave
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
            'clave' => $stringRule
        ];
    }
}
