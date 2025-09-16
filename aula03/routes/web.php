<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

// Route::get('paginateste', function () {
    // return view('teste');
// });

Route::post('/cliente','App\Http\Controllers\ClienteController@store'); //cadastro
Route::get('/cliente','App\Http\Controllers\ClienteController@index'); //visualização