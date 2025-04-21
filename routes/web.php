<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('welcome');
})->name('home');;

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

// Route for Teacher Training – point to a different method or view
Route::get('/register/teacher-training', [RegistrationController::class, 'showTrainingForm'])->name('register.teacher.training');
Route::post('/register/teacher-training', [RegistrationController::class, 'registerTraining'])->name('register.teacher.training.submit');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');