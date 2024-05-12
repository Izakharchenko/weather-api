<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $table = 'weather';

    protected $fillable = [
        'data',
        'city_id',
        'temperature',
        'wind_speed',
        'clouds',
        'humidity',
        'pressure'
    ];
}
