<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceService
{
    public function createService($data)
    {
        DB::beginTransaction();

        try {
            $service = Service::create([
                'name' => $data['name'],
                'description' => $data['description'],
            ]);

            DB::commit();
            return $service; 
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; 
        }
    }

    public function updateService($data, $id)
    {
        DB::beginTransaction();

        try {
            $service = Service::findOrFail($id);
            $service->update([
                'name' => $data['name'],
                'description' => $data['description'],
            ]);

            DB::commit();
            return $service; 
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; 
        }
    }

    public function deleteService($id)
    {
        DB::beginTransaction();

        try {
            $service = Service::findOrFail($id);
            $service->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; 
        }
    }
}