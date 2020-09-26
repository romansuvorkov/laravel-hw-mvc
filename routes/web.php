<?php

use Illuminate\Support\Facades\Route;
use App\Models\Guitar;
use App\Models\GuitarType;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    Guitar::create([
        'brand' => 'Fender',
        'model' => 'Stratocaster',
        'type_id' => 1,
        'price' => 5000
    ]);

    Guitar::create([
        'brand' => 'Makalo Soprano',
        'model' => 'Kala MK-S',
        'type_id' => 3,
        'price' => 5000
    ]);

    Guitar::create([
        'brand' => 'Yamaha',
        'model' => 'F310',
        'type_id' => 2,
        'price' => 18000
    ]);

    $stratocaster = Guitar::where('model', 'Stratocaster')->get()->toArray();
    $kala = Guitar::where('model', 'Kala MK-S')->get()->toArray();
    $f310 = Guitar::where('model', 'F310')->get()->toArray();
    
    echo 'Товар ID ' . $stratocaster[0]['id'] . ' ' . $stratocaster[0]['brand'] . ' ' .$stratocaster[0]['model'] . ' успешно добавлен' . '<br>';
    echo 'Товар ID ' . $kala[0]['id'] . ' ' . $kala[0]['brand'] . ' ' .$kala[0]['model'] . ' успешно добавлен' . '<br>';
    echo 'Товар ID' . $f310[0]['id'] . ' ' . $f310[0]['brand'] . ' ' .$f310[0]['model'] . ' успешно добавлен' . '<br>';
});


Route::get('/show', function () {
    $guitars = Guitar::where('id', 6)->get();
    echo 'ID Товара - ' . $guitars[0]->id . '<br>';
    echo 'Бренд - ' . $guitars[0]->brand . '<br>';
    echo 'Модель - ' . $guitars[0]->model . '<br>';
    echo 'Тип - ' . $guitars[0]->guitarType->name . '<br>';
    echo 'Цена - ' . $guitars[0]->price . ' руб.' . '<br>';
});
