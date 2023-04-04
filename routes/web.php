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


Route::get('/motorBekapcsolas',[iranyitas::class,'motorBekapcsolas']);
Route::get('/motorLekapcsolas',[iranyitas::class,'motorLekapcsolas']);
Route::get('/fel',[iranyitas::class,'fel']);
Route::get('/le',[iranyitas::class,'le']);
Route::get('/bal',[iranyitas::class,'bal']);
Route::get('/jobb',[iranyitas::class,'jobb']);
