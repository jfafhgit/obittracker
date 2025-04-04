<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CemeteriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cemeteries')->insert([
            ['name' => 'Cemetery 1', 'area_id' => 1],
            ['name' => 'Cemetery 2', 'area_id' => 2],
            ['name' => 'Cemetery 3', 'area_id' => 3],
        ]);
    }
}
