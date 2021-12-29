<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\Patient;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $appointment=Appointment::all();
        $user=User::all();
        $doctor=Doctors::all();
        $patient=Patient::all();
        $pharmacy=Pharmacy::all();
        return view('home',compact('user','doctor','patient','appointment'));
    }




}
