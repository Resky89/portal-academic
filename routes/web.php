<?php

use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\JadwalController;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin']);

Route::get('dosen/dashboard',[HomeController::class, 'dosen'])->middleware(['auth','dosen']);

Route::get('matkul',[MatkulController::class,'index']);
Route::post('matkul/add',[MatkulController::class,'add']);
Route::post('matkul/hapus',[MatkulController::class,'hapus']);
Route::post('matkul/edit',[MatkulController::class,'edit']);

Route::get('nilai',[NilaiController::class,'index']);
Route::post('nilai/add',[NilaiController::class,'add']);
Route::post('nilai/hapus',[NilaiController::class,'hapus']);
Route::post('nilai/edit',[NilaiController::class,'edit']);

Route::get('jadwal_kuliah',[JadwalController::class,'index']);
Route::post('jadwal/add',[JadwalController::class,'add']);
Route::post('jadwal/hapus',[JadwalController::class,'hapus']);
Route::post('jadwal/edit',[JadwalController::class,'edit']);

Route::get('user',[UserController::class,'index']);
Route::post('user/add',[UserController::class,'add']);
Route::post('user/hapus',[UserController::class,'hapus']);
Route::post('user/edit',[UserController::class,'edit']);

Route::get('/view_jadwal', [JadwalKuliahController::class, 'index']);
Route::get('/dashboard', [JadwalKuliahController::class, 'dashboard']);
Route::get('/dosen/dashboard', [JadwalKuliahController::class, 'dosenDashboard']);
Route::get('/admin/dashboard', [JadwalKuliahController::class, 'adminDashboard']);

Route::get('/about', function () {
    return view('VAbout');
})->name('about');
