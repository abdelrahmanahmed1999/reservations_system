<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\Hash; 
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\UserService;


class ApplicantController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $applicants=User::where('role','applicant')->get();
        return view('superAdmin.applicant.index',compact('applicants'));
    }

    
    public function Add()
    {
        return view('superAdmin.applicant.add');
    }
    

    public function Insert(StoreUserRequest $request)
    {
        try {
            $this->userService->createUser($request->validated());
            return redirect()->route('superadmin.applicant.index')->with('success', 'Applicant inserted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
        
    public function Edit($id)
    {
        $applicant = User::find($id);
        if(!$applicant){
            return redirect()->route('superadmin.applicant.index');
        }

        return view('superAdmin.applicant.edit',compact('applicant'));
    }
    

    public function Update(UpdateUserRequest $request)
    {
    
        try {
            $this->userService->updateUser($request->validated(), $request->id);
            return redirect()->route('superadmin.applicant.index')->with('success', 'Applicant updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
    
    public function  Delete($id){
        
        try {
            $this->userService->deleteUser($id);
            return redirect()->route('superadmin.applicant.index')->with('success', 'Applicant deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function getApplicantProfile($id)
    {   
        $applicant=User::with('reservations.service')->find($id);
        //  return $applicant;
        return view('superAdmin.applicant.applicant_profile',compact('applicant'));
    }


    public function changeReservationStatus($status, $id)
    {

        $reservation = Reservation::find($id);

        if ($reservation) {
            $reservation->status = $status; 
            $reservation->save();
            
            return redirect()->back();
        }

        return redirect()->route('superadmin.applicant.index');
    }

}


