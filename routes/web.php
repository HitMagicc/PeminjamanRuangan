<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\GedungController as AdminGedungController;
use App\Http\Controllers\Admin\RiwayatController as AdminRiwayatController;
use App\Http\Controllers\Admin\RuanganController;
use App\Http\Controllers\DownloadController;
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
//     return view('components.templates.admin.gedung.index');
// });
Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/signup', [LoginController::class,'signup'])->name('sign-up');


//user
// User Dashboard
Route::get('/user/dashboard', [DashboardController::class,'index'])->name('dashboard.index');

// Request Routes
Route::get('/user/request', [RequestController::class,'index'])->name('request.index');
Route::get('/user/request/create', [RequestController::class,'create'])->name('request.create');
Route::post('/user/request/store', [RequestController::class,'store'])->name('request.store');
Route::get('/user/request/{id}', [RequestController::class, 'show'])->name('request.show');

Route::get('/user/request-download/{id}', [DownloadController::class, 'download'])->name('request.download');

// Riwayat Routes
Route::get('/user/riwayat', [RiwayatController::class,'index'])->name('riwayat.index');
Route::get('/user/riwayat/{id}', [RiwayatController::class,'show'])->name('riwayat.show');


//admin
Route::get('/admin/dashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard.index');
Route::get('/admin/dashboard/show/lahiyayaaowkaowkoa={id}', [AdminDashboardController::class,'show'])->name('admin.dashboard.show');
Route::put('/admin/dashboard/{id}/update', [AdminDashboardController::class, 'update'])->name('admin.dashboard.update');

Route::get('/admin/history', [AdminRiwayatController::class,'index'])->name('admin.riwayat.index');
Route::get('/admin/history/{id}', [AdminRiwayatController::class,'show'])->name('admin.riwayat.show');

Route::get('/admin/gedung', [AdminGedungController::class,'index'])->name('admin.gedung.index');
Route::get('/admin/gedung/create', [AdminGedungController::class,'create'])->name('admin.gedung.create');
Route::post('/admin/gedung/store', [AdminGedungController::class,'store'])->name('admin.gedung.store');
Route::get('/admin/gedung/edit/{param}', [AdminGedungController::class,'edit'])->name('admin.gedung.edit');
Route::post('/admin/gedung/update/{param}', [AdminGedungController::class,'update'])->name('admin.gedung.update');
Route::post('/admin/gedung/delete/{param}', [AdminGedungController::class,'delete'])->name('admin.gedung.delete');

Route::get('/admin/ruangan',[RuanganController::class,'index'])->name('admin.ruangan.index');
Route::get('/admin/ruangan/show{id}',[RuanganController::class,'show'])->name('admin.ruangan.show');
Route::get('/admin/ruangan/create',[RuanganController::class,'create'])->name('admin.ruangan.create');
Route::post('/admin/ruangan/store',[RuanganController::class,'store'])->name('admin.ruangan.store');
Route::get('/admin/ruangan/edit/{param}',[RuanganController::class,'edit'])->name('admin.ruangan.edit');
Route::post('/admin/ruangan/update/{param}',[RuanganController::class,'update'])->name('admin.ruangan.update');
Route::get('/admin/ruangan/delete/{param}',[RuanganController::class,'delete'])->name('admin.ruangan.delete');

// Route::get('/yes', [GedungController::class, 'index'])->name('user.index');
// Route::get('/create-gedung',[GedungController::class,'create'])->name('user.create-gedung');
// Route::post('/store-gedung',[GedungController::class,'store'])->name('user.store-gedung');
// Route::get('/edit-gedung/{id}',[GedungController::class,'edit'])->name('user.edit-gedung');
// Route::post('/update-gedung/{id}',[GedungController::class,'update'])->name('user.update-gedung');
// Route::post('/delete-gedung/{id}',[GedungController::class,'delete'])->name('user.delete-gedung');