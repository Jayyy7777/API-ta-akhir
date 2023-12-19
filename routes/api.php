<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::post('/pengguna', [PenggunaController::class, 'penggunanya']);
Route::get('/materi', [MateriController::class, 'index']);
Route::post('/materi', [MateriController::class, 'materi']);
Route::get('/materi/{id_kategori}', [MateriController::class, 'show']);
Route::get('/rules', [RulesController::class, 'index']);
Route::post('/rules', [RulesController::class, 'rulesnya']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'kategori']);