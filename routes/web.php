<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

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
})->middleware('auth')->name('dashboard');

Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/signup/individual', [SignupController::class, 'sendIndividualEmail'])->name('signup.individual');
Route::post('/signup/business', [SignupController::class, 'sendBusinessEmail'])->name('signup.business');
Route::post('/login', [SignupController::class, 'login'])->name('login');
Route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('login')->with('success', 'You have been logged out successfully.');
})->name('logout');
