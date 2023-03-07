<?php

namespace App\Http\DataTransferObjects\Role;

use Spatie\LaravelData\Data;

class RoleData extends Data
{
    /**
     * @param string $name
     */
    public function __construct(
        public string $name
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $stringRule = 'required|string';
        return [
            'name' => $stringRule
        ];
    }
}
