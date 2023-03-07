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
     * @return mixed
     */
    public function findById(int $id): mixed
    {
        return Client::where('id', $id)->with('role')->first();
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Client::with('role')->get();
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
            $client->name = $clientData->name;
            $client->password = $clientData->password;
            $client->email = $clientData->email;
            $client->role_id = 2;
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
     * @param string $id
     * @param ClientData $clientData
     * @return Client
     * @throws Exception
     */
    public function updateById(string $id, ClientData $clientData): Client
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

