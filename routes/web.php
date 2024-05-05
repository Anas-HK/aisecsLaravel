<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
});

Route::get('/signup/individual', function () {
    $packageName = request()->query('package');
    return view('signupIndividual', ['packageName' => $packageName]);
})->name('signup.individual');

Route::get('/signup/business', function() {
    $packageName = request()->query('package');
    return view('signupBusiness', ['packageName' => $packageName]);
})->name('signup.business');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');;


Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/demo', function() {
    return view('requestDemo');
})->name('demo');

Route::post('/signup/individual', [SignupController::class, 'sendIndividualEmail'])->name('signup.individual');
Route::post('/signup/business', [SignupController::class, 'sendBusinessEmail'])->name('signup.business');
Route::post('/demo', [SignupController::class, 'requestDemo'])->name('request.demo');
Route::post('/login', [SignupController::class, 'login'])->name('login');
Route::get('/logout', [SignupController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
