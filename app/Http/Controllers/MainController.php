<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Parking;
use App\Models\flight;
use App\Models\flight_times;
use App\Models\flight_parking;
use App\Models\flight_details;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index()
    {
        
    return view('welcome');
    }

    public function parking()
    {
              
    return view('parking');
    }
}

