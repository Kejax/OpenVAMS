<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = [
        'flights'
    ];

    protected $fillable = [
        'id',
        'user_id',
        'airline_id',
        'company_route_id',
        'flight_type',
        'callsign',
        'flight_number',
        'estimated_departure_time',
        'estimated_arrival_time',
        'actual_departure_time',
        'actual_arrival_time',
        'route',
        'origin',
        'destination',
        'alternate',
        'origin_parking_stand',
        'destination_parking_stand',
        'alternate_parking_stand',
        'aircraft_id',
        'estimated_time',
        'actual_time',
        'state',
        'metar_origin',
        'metar_destination',
        'metar_alternate',
        'passenger_count',
        'payload',
        'fuel',
        'cruise_level',
    ];
}
