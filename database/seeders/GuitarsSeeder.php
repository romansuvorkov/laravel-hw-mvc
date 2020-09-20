<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuitarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('guitars')->insert([
            'brand' => 'Бренд 1',
            'model' => 'Модель Электрогитара 1',
            'price' => 1000,
            'type_id' => '1',
        ]);

        DB::table('guitars')->insert([
            'brand' => 'Бренд 2',
            'model' => 'Модель Акустическая 1',
            'price' => 1500,
            'type_id' => '2',
        ]);

        DB::table('guitars')->insert([
            'brand' => 'Бренд 3',
            'model' => 'Модель Укулеле 1',
            'price' => 2000,
            'type_id' => '3',
        ]);

        DB::table('guitars')->insert([
            'brand' => 'Бренд 3',
            'model' => 'Модель Укулеле 2',
            'price' => 3000,
            'type_id' => '3',
        ]);

    }
}
