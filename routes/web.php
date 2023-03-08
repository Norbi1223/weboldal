<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lista;
use App\Http\Controllers\iranyitas;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/adatok',[lista::class, 'lista_ki']);

Route::get('/iranyitas',[iranyitas::class, 'iranyitas_ki']);
Route::post('/iranyitas',[iranyitas::class, 'iranyitas_be']);
