<?php

use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/phones',PhoneController::class);