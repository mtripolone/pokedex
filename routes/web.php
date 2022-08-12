<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('pokemon', 'App\Http\Controllers\PokemonInfoController@index');
