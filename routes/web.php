<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrekuensiController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\MabesTNIController;
use App\Http\Controllers\TNIADController;
use App\Http\Controllers\TNIALController;
use App\Http\Controllers\TNIAUController;
use App\Http\Controllers\UsersController;


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get("/", [FrekuensiController::class, 'index'])->name('index.index');

    // Menu Bar
    Route::get("/mabestni", [MabesTNIController::class, 'index'])->name('mabestni.index');
    Route::get("/tniad", [TNIADController::class, 'index'])->name('tniad.index');
    Route::get("/tnial", [TNIALController::class, 'index'])->name('tnial.index');
    Route::get("/tniau", [TNIAUController::class, 'index'])->name('tniau.index');
    Route::get("/users", [UsersController::class, 'index'])->name('users.index');

    // Main Menu
    Route::get('/mabestni/create', [MabesTNIController::class, 'create'])->name('mabestni.create');
    Route::get('/tniad/create', [TNIADController::class, 'create'])->name('tniad.create');
    Route::get('/tnial/create', [TNIALController::class, 'create'])->name('tnial.create');
    Route::get('/tniau/create', [TNIAUController::class, 'create'])->name('tniau.create');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');

    Route::get('/page/edit/{id}', [MabesTNIController::class, 'edit'])->name('index.edit');
    Route::put('/page/update/{id}', [MabesTNIController::class, 'update'])->name('index.update');

    //Delete Method
    Route::delete('/page/delete/{id}', [MabesTNIController::class, 'destroy'])->name('index.destroy');
    Route::delete('/page/delete/user/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

    // Users
    
    Route::get('/page/edit/users/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/page/update/user/{id}', [UsersController::class, 'update'])->name('users.update');
    // Post Method
    
    Route::post('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
    
    Route::post('/mabestni', [MabesTNIController::class, 'store'])->name('mabestni.store');
    Route::post('/tniad', [TNIADController::class, 'store'])->name('tniad.store');
    Route::post('/tnial', [TNIALController::class, 'store'])->name('tnial.store');
    Route::post('/tniau', [TNIAUController::class, 'store'])->name('tniau.store');
    Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
});