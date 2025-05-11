<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ApplicantDashboardController extends Controller
{
    public function home()
    {
        $applicant = Auth::user();
        return view('applicant.home', compact('applicant'));
    }
}
