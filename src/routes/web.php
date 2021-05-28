<?php
use Illuminate\Support\Facades\Route;
use Piseth\Pos\Http\Controllers\PosController;
Route::get('pos', [PosController::class, 'index']);
Route::post('pos', [PosController::class, 'store'])->name('pos.store');