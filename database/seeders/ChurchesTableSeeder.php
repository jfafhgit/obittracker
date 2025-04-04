<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChurchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('churches')->insert([
            ['name' => 'Church X', 'area_id' => 1],
            ['name' => 'Church Y', 'area_id' => 2],
            ['name' => 'Church Z', 'area_id' => 3],
            ['name' => 'Church A', 'area_id' => 1],
            ['name' => 'Church B', 'area_id' => 2],
            ['name' => 'Church C', 'area_id' => 3],
            ['name' => 'Church D', 'area_id' => 1],
            ['name' => 'Church E', 'area_id' => 2],
            ['name' => 'Church F', 'area_id' => 3],
            ['name' => 'Church G', 'area_id' => 1],
            ['name' => 'Church H', 'area_id' => 2],
            ['name' => 'Church I', 'area_id' => 3],
        ]);
    }
}
