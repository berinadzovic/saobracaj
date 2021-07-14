<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Airline;
use App\Models\flight;
use App\Models\flight_times;
use App\Models\flight_parking;
use App\Models\flight_details;

class Parking extends Model
{
    use HasFactory;
    public $connection = 'sqlsrv';
    public $table = 'parking';
   
 

}
