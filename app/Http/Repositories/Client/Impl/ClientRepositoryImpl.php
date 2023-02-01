<?php


namespace App\Http\Repositories\Client\Impl;

use App\Http\DataTransferObjects\Client\ClientData;
use App\Http\Repositories\Client\ClientRepository;
use App\Models\Client;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientRepositoryImpl implements ClientRepository
{
    /**
     * @param int $id
     * @return string
     * @throws Exception
     */
    public function destroyById(int $id): string
    {
        DB::beginTransaction();
        try {
            Client::destroy($id);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return 'El cliente ha sido eliminado exitosamente';
    }

    /**
     * @param int $id
     * @return Client
     */
    public function findById(int $id): Client
    {
        return Client::findOrFail($id);
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Client::all();
    }

    /**
     * @param ClientData $clientData
     * @return Client
     * @throws Exception
     */
    public function store(ClientData $clientData): Client
    {
        DB::beginTransaction();
        try {
            $client = new Client();
            $client->fill((array)$clientData);
            $client->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $client;
    }

    /**
     * @param int $id
     * @param ClientData $clientData
     * @return Client
     * @throws Exception
     */
    public function updateById(int $id, ClientData $clientData): Client
    {
        DB::beginTransaction();
        try {
            $client = Client::findOrFail($id);
            $client->fill((array)$clientData);
            $client->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $client;
    }
}

