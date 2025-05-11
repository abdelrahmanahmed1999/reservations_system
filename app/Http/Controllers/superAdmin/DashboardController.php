<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Service;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function home()
    {
        $applicants = User::where('role','applicant')->get();
        $servicesCount = Service::count();
        $reservationsCount=Reservation::count();

        return view('superAdmin.home', compact(
             'applicants','servicesCount','reservationsCount'
            ));
    }
}
