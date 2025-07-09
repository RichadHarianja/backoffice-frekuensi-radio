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
    Route::get('/page/create', [MabesTNIController::class, 'create'])->name('index.create');
    Route::get('/page/edit{id}', [MabesTNIController::class, 'edit'])->name('index.edit');
    Route::put('/page/update{id}', [MabesTNIController::class, 'update'])->name('index.update');
    Route::delete('/page/delete{id}', [MabesTNIController::class, 'destroy'])->name('index.destroy');

    




    // POST ROUTE
    Route::post('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
    Route::post('/mabestni/store', [MabesTNIController::class, 'store'])->name('index.store');
});