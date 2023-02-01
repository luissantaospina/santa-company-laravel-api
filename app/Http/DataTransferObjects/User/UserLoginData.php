<?php

namespace App\Http\DataTransferObjects\User;

use Spatie\LaravelData\Data;

class UserLoginData extends Data
{
    /**
     * @param string $nombre
     * @param string $clave
     */
    public function __construct(
        public string $nombre,
        public string $clave,
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $stringRule = 'required|string';
        return [
            'nombre' => $stringRule,
            'clave' => $stringRule
        ];
    }
}
