<?php

use Illuminate\Support\Facades\Route;

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
    $cards = config('db_comics.card');
    return view('comics', ['cards' => $cards]);
})->name('comics');


Route::get('/comics/{titolo}', function($titolo){
    $cards = config('db_comics.card');
    $icon = config('db_comics.icon');
    $social = config('db_comics.social');

    foreach($cards as $key => $card){
        if($key == $titolo){
            $single = $card;
        }
    };

    return view ('detail_fumetto', compact('single', 'icon', 'social'));
})->name('detail-comics');
