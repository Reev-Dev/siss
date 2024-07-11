<?php

use App\Http\Controllers\SpurchasedController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('sekolah', 'sekolah')
    ->name('sekolah');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::controller(SpurchasedController::class)->group(function () {
    Route::get('/sekolah', 'index')->name('sekolah');
    Route::get('/sekolah-create', 'create')->name('sekolah.create');
    Route::post('/sekolah', 'store')->name('sekolah.perform');
    Route::get('/sekolah-edit/{id}', 'edit')->name('sekolah.edit');
    Route::put('/sekolah-edit/{id}', 'update')->name('sekolah.update');
    Route::delete('sekolah/{id}', 'destroy')->name('sekolah.delete');
});


require __DIR__ . '/auth.php';
