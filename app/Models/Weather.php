<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $table = 'weather';

    protected $fillable = [
        'date',
        'city_id',
        'temperature',
        'wind_speed',
        'clouds',
        'humidity',
        'pressure'
    ];

    protected $casts = [
        'date' => 'date',
        'temperature' => 'int',
        'wind_speed' => 'float',
        'clouds' => 'int',
        'humidity' => 'int',
        'pressure' => 'int',
    ];
}
