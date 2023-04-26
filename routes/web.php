<?php

use App\Http\Controllers\Admins;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clients;
use App\Http\Controllers\Datos;
use Illuminate\Support\Facades\Route;


Route::get('/inicio', [Datos::class, 'index'])->name('inicio');
Route::get('/create', [Datos::class, 'create']);
Route::post('/store', [Datos::class, 'store']);
Route::get('/show/{id}', [Datos::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Datos::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [Datos::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Datos::class, 'update'])->name('update');
// ---------------------------------------------------------------------------
Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/agregarUsuario', [AuthController::class, 'agregarUsuario']);
Route::get('/cliente', [Clients::class, 'index'])->name('cliente_index');
Route::get('/admin', [Admins::class, 'index'])->name('admin_index');