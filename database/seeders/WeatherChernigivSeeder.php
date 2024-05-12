<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WeatherChernigivSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = 2;
        $filename = resource_path('weather_c.json');
        $weatherArray = [];
        if (file_exists($filename)) {
            $data = file_get_contents($filename);
            $weatherArray = json_decode($data, true);

            foreach ($weatherArray as &$item) {
                $item['city_id'] = $id;
            }

            DB::table('weather')->insert($weatherArray);
        } else {
            throw new \Exception($filename);
        }
    }
}
