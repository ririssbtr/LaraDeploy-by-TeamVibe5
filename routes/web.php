<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('home');
});

Route::get('/form', [FormController::class, 'show'])->name('form');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');

