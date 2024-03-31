<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $table = 'aircrafts';

    protected $fillable = [
        'subfleets',
        'registration',
        'type',
        'current_state',
        'seat_count',
        'first_class_seats',
        'weekly_costs'
    ];
}
