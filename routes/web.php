<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('users', UserController::class);

// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
// Route::get('/users', [UserController::class, 'index'])->name('users.index'); 
// Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');