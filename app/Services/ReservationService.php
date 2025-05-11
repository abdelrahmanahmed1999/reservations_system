<?php

namespace App\Services;

use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class ReservationService
{
    public function createReservation($request)
    {
        DB::beginTransaction();

        try {

            $reservation = Reservation::create([
                'user_id' => $request->user_id, 
                'service_id' => $request->service_id,
            ]);
    
            DB::commit();
            return $reservation; 
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; 
        }
    }



    public function deleteReservation($id)
    {
        DB::beginTransaction();

        try {

            $reservation = Reservation::findOrFail($id);
            $reservation->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; 
        }
    }
}