<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('welcome');
})->name('home');;

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');