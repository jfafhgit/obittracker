<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
            ['name' => 'Area 1'],
            ['name' => 'Area 2'],
            ['name' => 'Area 3'],
            ['name' => 'Area 4'],
            ['name' => 'Area 5'],
            ['name' => 'Area 6'],
            ['name' => 'Area 7'],
            ['name' => 'Area 8'],
            ['name' => 'Area 9'],
            ['name' => 'Area 10'],
            ['name' => 'Area 11'],
            ['name' => 'Area 12'],
            ['name' => 'Area 13'],
            ['name' => 'Area 14'],
            ['name' => 'Area 15'],
            ['name' => 'Area 16'],
        ]);
    }
}
