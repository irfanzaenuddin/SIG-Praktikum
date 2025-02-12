<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/gempa', function () {
    return view('gempa');
});


Route::get('/beranda', [BerandaController::class, 'index']
);

