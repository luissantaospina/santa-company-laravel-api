<?php

namespace App\Http\Services\Client;

use App\Http\DataTransferObjects\Client\ClientData;
use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

interface ClientService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string;

    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id): mixed;

    /**
     * @param ClientData $clientData
     * @return Client
     */
    public function store(ClientData $clientData): Client;

    /**
     * @param string $id
     * @param ClientData $clientData
     * @return Client
     */
    public function update(string $id, ClientData $clientData): Client;
}
