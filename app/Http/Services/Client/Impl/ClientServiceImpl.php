<?php

namespace App\Http\Services\Client\Impl;

use App\Http\Repositories\Client\ClientRepository;
use App\Http\Services\Client\ClientService;
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
}
