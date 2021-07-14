<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Airline;
use App\Models\Parking;
use App\Models\flight;
use App\Models\flight_times;
use App\Models\flight_details;

class flight_parking extends Model
{
    use HasFactory;
    public $connection = 'sqlsrv';
    public $table = 'flight_parking';
   /* public function flightOnFlightParking()
    {
        return $this->belongsTo(flight::class, 'FLIGHT_ID');
    }
    public function ParkingOnFlightParking()
    {
        return $this->belongsTo(Parking::class, 'PARKING_ID');
    }*/

}
