<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directors')->insert([
            ['name' => 'Director Alpha', 'area_id' => 1],
            ['name' => 'Director Beta', 'area_id' => 2],
            ['name' => 'Director Gamma', 'area_id' => 3],
            ['name' => 'Director A', 'area_id' => 1],
            ['name' => 'Director B', 'area_id' => 2],
            ['name' => 'Director C', 'area_id' => 3],
        ]);
    }
}
