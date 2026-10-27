<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function(){
    $users = User::all();
    return view('home', compact('users'));
});


Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/learn', function () {
    return view('learn');
})->name('learn');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::fallback(function(){
    return 'You are lost!';
});

Route::get('/', [UserController::class, 'index'])->name('home');