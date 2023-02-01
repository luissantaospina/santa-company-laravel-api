<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Services\Client\ClientService;
use Illuminate\Http\JsonResponse;

/**
 * Class VpcController
 * @package App\Http\Controllers\Vpc
 */
class ClientController extends Controller
{
    /**
     * @var ClientService
     */
    private ClientService $clientService;

    /**
     * VpcController constructor.
     * @param ClientService $clientService
     */
    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->clientService->index());
    }
}
