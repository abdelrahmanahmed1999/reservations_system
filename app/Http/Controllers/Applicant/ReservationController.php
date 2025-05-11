<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;

use App\Models\Service;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\ReservationService;

class ReservationController extends Controller
{
    
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    public function Add()
    {
        $services=Service::where('availability','1')->get();
        return view('applicant.addReservation',compact('services'));
    }
    
    public function insert(Request $request)
    {
        $applicant = Auth::user();
        $request->merge(['user_id' => Auth::id()]);

        try {

            $this->reservationService->createReservation($request);

            return redirect()->route('applicant.dashboard.home')->with('success', 'Reservation Created Successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
    
    public function  Delete($id){
        
        try {
            $this->reservationService->deleteReservation($id);
            return redirect()->route('applicant.dashboard.home')->with('success', 'Reservation deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /****************************************API********************************* */


    public function insertApi(Request $request)
    {
        $user = $request->user();

        $request->merge(['user_id' => $user->id]);

        try {
            $reservation = $this->reservationService->createReservation($request);

            return response()->json([
                'message' => 'Reservation Created Successfully',
                'reservation' => $reservation
            ], 201); 

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400); 
        }
    }


    public function deleteApi(Request $request,$id)
    {
        $user = $request->user();
        try {        
            $reservation = Reservation::find($id);
            if (!$reservation) {
                return response()->json([
                    'message' => 'No reservation Found.'
                ], 403); 
            }
            if ($reservation->user_id != $user->id) {
                return response()->json([
                    'message' => 'You are not authorized to delete this reservation.'
                ], 403); 
            }
            $this->reservationService->deleteReservation($id);

            return response()->json([
                'message' => 'Reservation deleted successfully.'
            ], 200); 

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400); 
        }
    }
}