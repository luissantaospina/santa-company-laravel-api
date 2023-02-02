<?php

namespace App\Http\Services\Client\Impl;

use App\Http\DataTransferObjects\Client\ClientData;
use App\Http\Repositories\Client\ClientRepository;
use App\Http\Services\Client\ClientService;
use App\Models\Client;
use Exception;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class ClientService
 * @package App\Http\Controllers\Client
 */
class ClientServiceImpl implements ClientService
{
    /**
     * @var ClientRepository
     */
    private ClientRepository $clientRepository;

    /**
     * ClientServiceImpl constructor.
     * @param ClientRepository $clientRepository
    */
    public function __construct(
        ClientRepository $clientRepository
    )
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->clientRepository->selectAll();
    }

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string
    {
        return $this->clientRepository->destroyById($id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id): mixed
    {
        return $this->clientRepository->findById($id);
    }

    /**
     * @param ClientData $clientData
     * @return Client
     * @throws Exception
     */
    public function store(ClientData $clientData): Client
    {
        return $this->clientRepository->store($clientData);
    }

    /**
     * @param string $id
     * @param ClientData $clientData
     * @return Client
     * @throws Exception
     */
    public function update(string $id, ClientData $clientData): Client
    {
        return $this->clientRepository->updateById($id, $clientData);
    }
}
