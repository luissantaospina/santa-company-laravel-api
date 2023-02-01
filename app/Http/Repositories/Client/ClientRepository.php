<?php

namespace App\Http\Repositories\Client;

use Illuminate\Database\Eloquent\Collection;

interface ClientRepository
{
    /**
     * @return Collection
     */
    public function selectAll(): Collection;
}
