<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Airline;
use App\Models\Parking;
use App\Models\flight;
use App\Models\flight_times;
use App\Models\flight_parking;


class flight_details extends Model
{
    use HasFactory;
    public $connection = 'sqlsrv';
    public $table = 'flight_details';
    public function flightOnFlightDetails()
    {
        return $this->belongsTo(flight::class, 'FLIGHT_ID');
    }

}
