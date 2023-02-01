<?php

namespace App\Http\DataTransferObjects\Role;

use Spatie\LaravelData\Data;

class RoleData extends Data
{
    /**
     * @param string $nombre
     */
    public function __construct(
        public string $nombre
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $stringRule = 'required|string';
        return [
            'nombre' => $stringRule
        ];
    }
}
