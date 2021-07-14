<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Airline;
use App\Models\Parking;
use App\Models\flight_times;
use App\Models\flight_parking;
use App\Models\flight_details;

class flight extends Model
{
    use HasFactory;
    public $connection = 'sqlsrv';
    public $table = 'flight';
    public function airlinesOnFlight()
    {
        return $this->belongsTo(airline::class, 'AIRLINES_ID');
    }
}