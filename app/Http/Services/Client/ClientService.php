<?php

namespace App\Http\Services\Client;

use Illuminate\Database\Eloquent\Collection;

interface ClientService
{
    /**
     * @return Collection
     */
    public function index(): Collection;
}
