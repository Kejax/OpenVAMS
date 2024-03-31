<?php

namespace App\Models;

use App\Models\Enums\PirepStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pirep extends Model
{
    use HasFactory;

    protected $table = 'pireps';

    protected $fillable = [
        'id',
        'user_id',
        'flight_log',
        'status'
    ];

    protected $casts = [
        'status' => PirepStatus::class,
    ];

    public function flight() {
        return $this->belongsTo(Flight::class, 'flight_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
