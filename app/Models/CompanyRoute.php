<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRoute extends Model
{
    use HasFactory;

    protected $table = 'company_routes';

    protected $fillable = [
        'origin_airport_id',
        'destination_airport_id',
        'alternate_airport_id',
        'route',
        'notes',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function flights() {
        return $this->hasMany(Flight::class, 'company_route_id', 'id');
    }

}
