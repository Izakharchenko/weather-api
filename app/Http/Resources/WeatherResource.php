<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'city_id' => $this->city_id,
            'temperature' => $this->temperature,
            'wind_speed' => $this->wind_speed,
            'clouds' => $this->clouds,
            'humidity' => $this->humidity,
            'pressure' => $this->pressure,
        ];
    }
}
