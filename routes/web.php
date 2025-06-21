<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'create']);
Route::post('/', [MahasiswaController::class, 'store']);
Route::get('/admin', [MahasiswaController::class, 'adminView']);