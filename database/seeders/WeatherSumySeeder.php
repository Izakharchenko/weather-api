<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WeatherSumySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = 1;
        $filename = resource_path('weather_su.json');
        $weatherArray = [];
        if (file_exists($filename)) {
            $data = file_get_contents($filename);
            $weatherArray = json_decode($data, true);  //decode a data

            foreach ($weatherArray as &$item) {
                $item['city_id'] = $id;
            }

            DB::table('weather')->insert($weatherArray);
        } else {
            throw new \Exception($filename);
        }
    }
}
