<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'name' => 'Sumy',
                'lat' => 50.911944,
                'lon' => 34.803333,
            ],
            [
                'name' => 'Chernihiv',
                'lat' => 51.491111,
                'lon' => 31.298611,
            ],
            [
                'name' => 'Kharkiv',
                'lat' => 50.005833,
                'lon' => 36.229167,
            ]
        ]);
    }
}
