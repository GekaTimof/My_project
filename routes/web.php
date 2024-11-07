<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DataController;

// main page
Route::get('/', function () {
    return view('welcome');
});

// form page
Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'submitForm']);

// data page
Route::get('/data', [DataController::class, 'showData']);

