<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuitarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('guitar_types')->insert([
            ['name' => 'Электрогитара'],
            ['name' => 'Акустическая гитара'],
            ['name' => 'Укулеле'],
        ]);
    }
}
