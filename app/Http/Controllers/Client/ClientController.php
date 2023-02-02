<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Client\ClientData;
use App\Http\Services\Client\ClientService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json($this->clientService->destroy($id), 204);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->clientService->index());
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json($this->clientService->show($id));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->clientService->store(ClientData::from($request)), 201);
    }

    /**
     * @param string $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update(string $id, Request $request): JsonResponse
    {
        return response()->json($this->clientService->update($id, ClientData::from($request)), 204);
    }
}
