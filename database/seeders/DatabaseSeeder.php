<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Database\Factories\PublisherFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Publisher::factory(5)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            FoodSeeder::class,
            SliderSeeder::class
        ]);

    }
}
