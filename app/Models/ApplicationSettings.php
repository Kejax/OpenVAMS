<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationSettings extends Model
{
    use HasFactory;

    protected $primaryKey = 'name';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'value',
    ];
}
