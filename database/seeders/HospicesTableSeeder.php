<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hospices')->insert([
            ['name' => 'Hospice X', 'area_id' => 1],
            ['name' => 'Hospice Y', 'area_id' => 2],
            ['name' => 'Hospice Z', 'area_id' => 3],
            ['name' => 'Hospice A', 'area_id' => 1],
            ['name' => 'Hospice B', 'area_id' => 2],
            ['name' => 'Hospice C', 'area_id' => 3],
        ]);
    }
}
