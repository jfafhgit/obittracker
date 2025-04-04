<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'area_id' => 1,
        // ]);
        $this->call([
            AreasTableSeeder::class,
            FuneralHomesTableSeeder::class,
            ChurchesTableSeeder::class,
            CemeteriesTableSeeder::class,
            HealthFacilitiesTableSeeder::class,
            HospicesTableSeeder::class,
            DirectorsTableSeeder::class,
        ]);
    }
}
