<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;

// Route untuk menampilkan halaman daftar kehadiran
Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances.index');

// Route untuk menampilkan form tambah kehadiran
Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');

// Route untuk menyimpan data kehadiran baru
Route::post('/attendances', [AttendanceController::class, 'store'])->name('attendances.store');

// Route untuk menampilkan form edit kehadiran
Route::get('/attendances/{id}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');

// Route untuk memperbarui data kehadiran
Route::put('/attendances/{id}', [AttendanceController::class, 'update'])->name('attendances.update');

// Route untuk menghapus data kehadiran
Route::delete('/attendances/{id}', [AttendanceController::class, 'destroy'])->name('attendances.destroy');