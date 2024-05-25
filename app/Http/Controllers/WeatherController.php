<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeatherResource;
use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weather_data = Weather::get();

        return WeatherResource::collection($weather_data);
    }

    /**
     * Get weather data for specific city within a date range.
     */
    public function getByCityAndDateRange(Request $request, $city_id)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $weather_data = Weather::where('city_id', $city_id)
                                ->whereBetween('date', [$start_date, $end_date])
                                ->get();

        return WeatherResource::collection($weather_data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Weather $weather)
    {
        return new WeatherResource($weather);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weather $weather)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
