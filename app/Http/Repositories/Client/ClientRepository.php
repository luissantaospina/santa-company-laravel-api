<?php

namespace App\Http\Repositories\Client;

use App\Http\DataTransferObjects\Client\ClientData;
use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

interface ClientRepository
{
    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id): mixed;

    /**
     * @param int $id
     * @return string
     */

    public function destroyById(int $id): string;
    /**
     * @return Collection
     */
    public function selectAll(): Collection;

    /**
     * @param ClientData $clientData
     * @return Client
     */
    public function store(ClientData $clientData): Client;

    /**
     * @param int $id
     * @param ClientData $clientData
     * @return Client
     */
    public function updateById(int $id, ClientData $clientData): Client;
}
