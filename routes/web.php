<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('index');
});

Route::get('/signup/individual', function() {
    return view('signupIndividual');
});

Route::get('/signup/business', function(){
    return view('signupBusiness');
});

Route::get('/message', function () {
    return view('message');
})->name('message');


Route::post('/signup/individual', [SignupController::class, 'sendIndividualEmail'])->name('signup.individual');
Route::post('/signup/business', [SignupController::class, 'sendBusinessEmail'])->name('signup.business');
