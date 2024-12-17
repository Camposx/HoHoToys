<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\ChildController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/santa', [ChildController::class, 'index'])->name('santa');
Route::get('/santa/{id}', [ChildController::class, 'show'])->name('santaShow');

Route::get('/elf', [ToyController::class, 'index'])->name('elf');
Route::get('/elf/{id}', [ToyController::class, 'show'])->name('elfShow');