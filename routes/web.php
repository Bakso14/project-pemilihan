<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/daftar-project', [MahasiswaController::class, 'create'])->name('project.form');
Route::post('/daftar-project', [MahasiswaController::class, 'store'])->name('project.submit');
Route::get('/admin-daftar-project', [MahasiswaController::class, 'adminView'])->name('project.admin');