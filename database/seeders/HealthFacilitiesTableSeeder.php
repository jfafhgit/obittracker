<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealthFacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('health_facilities')->insert([
            ['name' => 'Health Facility A', 'area_id' => 1],
            ['name' => 'Health Facility B', 'area_id' => 2],
            ['name' => 'Health Facility C', 'area_id' => 3],
            ['name' => 'Health Facility D', 'area_id' => 1],
            ['name' => 'Health Facility E', 'area_id' => 2],
            ['name' => 'Health Facility F', 'area_id' => 3],
            ['name' => 'Health Facility G', 'area_id' => 1],
            ['name' => 'Health Facility H', 'area_id' => 2],
            ['name' => 'Health Facility I', 'area_id' => 3],
        ]);
    }
}
