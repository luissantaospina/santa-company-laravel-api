<?php


namespace App\Http\Repositories\Client\Impl;

use App\Http\Repositories\Client\ClientRepository;
use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

class ClientRepositoryImpl implements ClientRepository
{
    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Client::all();
    }
}

