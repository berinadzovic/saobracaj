<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Parking;
use App\Models\flight;
use App\Models\flight_times;
use App\Models\flight_parking;
use App\Models\flight_details;

class Airline extends Model
{
    use HasFactory;
    public $connection = 'sqlsrv';
    public $table = 'airlines';
   
}
