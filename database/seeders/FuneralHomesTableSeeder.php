<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuneralHomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('funeral_homes')->insert([
            ['name' => 'Funeral Home A', 'area_id' => 1],
            ['name' => 'Funeral Home B', 'area_id' => 2],
            ['name' => 'Funeral Home C', 'area_id' => 3],
            ['name' => 'Funeral Home E', 'area_id' => 1],
            ['name' => 'Funeral Home F', 'area_id' => 2],
            ['name' => 'Funeral Home G', 'area_id' => 3],
            ['name' => 'Funeral Home H', 'area_id' => 1],
            ['name' => 'Funeral Home I', 'area_id' => 2],
            ['name' => 'Funeral Home J', 'area_id' => 3],
            ['name' => 'Funeral Home K', 'area_id' => 1],
            ['name' => 'Funeral Home L', 'area_id' => 2],
            ['name' => 'Funeral Home M', 'area_id' => 3],
        ]);
    }
}
