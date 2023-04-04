<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lista;
use App\Http\Controllers\iranyitas;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/adatok',[lista::class, 'lista_ki']);
Route::post('/adatok-torles',[lista::class, 'Torles']);
Route::post('/adatok',[lista::class, 'rogzites']);


Route::get('/iranyitas',[iranyitas::class, 'iranyitas_ki']);
Route::post('/iranyitas',[iranyitas::class, 'iranyitas_be']);
