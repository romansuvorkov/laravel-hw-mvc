<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(GuitarTypeSeeder::class);
        $this->call(GuitarsSeeder::class);
        // User::factory(10)->create();
    }
}
