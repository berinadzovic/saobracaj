<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Airline;
use App\Models\Parking;
use App\Models\flight;
use App\Models\flight_parking;
use App\Models\flight_details;

class flight_times extends Model
{
    use HasFactory;
    public $connection = 'sqlsrv';
    public $table = 'flight_times';
    public function flightOnFlightTimes()
    {
        return $this->belongsTo(Flight::class, 'FLIGHT_TIMES_ID');
    }
}
