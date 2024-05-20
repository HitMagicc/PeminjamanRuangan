<?php

use App\Http\Controllers\GedungController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GedungController::class, 'index'])->name('user.index');
Route::get('/create-gedung',[GedungController::class,'create'])->name('user.create-gedung');
Route::post('/store-gedung',[GedungController::class,'store'])->name('user.store-gedung');
Route::get('/edit-gedung/{id}',[GedungController::class,'edit'])->name('user.edit-gedung');
Route::post('/update-gedung/{id}',[GedungController::class,'update'])->name('user.update-gedung');
Route::post('/delete-gedung/{id}',[GedungController::class,'delete'])->name('user.delete-gedung');
