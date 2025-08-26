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

    // Create Menu
    Route::get('/mabestni/create', [MabesTNIController::class, 'create'])->name('mabestni.create');
    Route::get('/tniad/create', [TNIADController::class, 'create'])->name('tniad.create');
    Route::get('/tnial/create', [TNIALController::class, 'create'])->name('tnial.create');
    Route::get('/tniau/create', [TNIAUController::class, 'create'])->name('tniau.create');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');

    // Route::get('/page/edit/{id}', [MabesTNIController::class, 'edit'])->name('index.edit');
    Route::get('/mabestni/edit/{id}', [MabesTNIController::class, 'edit'])->name('mabestni.edit');
    Route::get('/tniad/edit/{id}', [TNIADController::class, 'edit'])->name('tniad.edit');
    Route::get('/tnial/edit/{id}', [TNIALController::class, 'edit'])->name('tnial.edit');
    Route::get('/tniau/edit/{id}', [TNIAUController::class, 'edit'])->name('tniau.edit');
    Route::get('/page/edit/users/{id}', [UsersController::class, 'edit'])->name('users.edit');

    // Route::put('/page/update/{id}', [MabesTNIController::class, 'update'])->name('index.update');
    Route::put('/mabestni/update/{id}', [MabesTNIController::class, 'update'])->name('mabestni.update');
    Route::put('/tniad/update/{id}', [TNIADController::class, 'update'])->name('tniad.update');
    Route::put('/tnial/update/{id}', [TNIALController::class, 'update'])->name('tnial.update');
    Route::put('/tniau/update/{id}', [TNIAUController::class, 'update'])->name('tniau.update');
    Route::put('/page/update/user/{id}', [UsersController::class, 'update'])->name('users.update');

    //Delete Method
    Route::delete('/mabestni/delete/{id}', [MabesTNIController::class, 'destroy'])->name('mabestni.destroy');
    Route::delete('/tniad/delete/{id}', [TNIADController::class, 'destroy'])->name('tniad.destroy');
    Route::delete('/tnial/delete/{id}', [TNIALController::class, 'destroy'])->name('tnial.destroy');
    Route::delete('/tniau/delete/{id}', [TNIAUController::class, 'destroy'])->name('tniau.destroy');
    Route::delete('/page/delete/user/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

    // Store Data Process
    Route::post('/mabestni', [MabesTNIController::class, 'store'])->name('mabestni.store');
    Route::post('/tniad', [TNIADController::class, 'store'])->name('tniad.store');
    Route::post('/tnial', [TNIALController::class, 'store'])->name('tnial.store');
    Route::post('/tniau', [TNIAUController::class, 'store'])->name('tniau.store');
    Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('auth.logout');

});