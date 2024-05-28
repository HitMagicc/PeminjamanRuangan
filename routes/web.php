<?php

use App\Http\Controllers\GedungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\RequestController;
use App\Http\Controllers\User\RiwayatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class,'login'])->name('index.login');

Route::post('/', [LoginController::class,'authenticate'])->name('auth.login');
Route::post('/logout', [LoginController::class,'logout'])->name('auth.logout');
// Route::get('/', function () {
//     return view('layout.user.index');
// });

//user
Route::get('/user/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
Route::get('/user/request', [RequestController::class,'index'])->name('request.index');
Route::get('/user/riwayat', [RiwayatController::class,'index'])->name('riwayat.index');

Route::get('/yes', [GedungController::class, 'index'])->name('user.index');
Route::get('/create-gedung',[GedungController::class,'create'])->name('user.create-gedung');
Route::post('/store-gedung',[GedungController::class,'store'])->name('user.store-gedung');
Route::get('/edit-gedung/{id}',[GedungController::class,'edit'])->name('user.edit-gedung');
Route::post('/update-gedung/{id}',[GedungController::class,'update'])->name('user.update-gedung');
Route::post('/delete-gedung/{id}',[GedungController::class,'delete'])->name('user.delete-gedung');
