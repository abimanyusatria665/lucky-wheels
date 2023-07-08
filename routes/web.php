<?php

use App\Http\Controllers\BetSlotsController;
use App\Http\Controllers\LuckyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create', [LuckyController::class, 'create']);
Route::post('/create', [LuckyController::class, 'store'])->name('lucky.store');
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'inputRegister'])->name('input.register');
Route::post('/login', [UserController::class, 'auth'])->name('login.auth');
Route::get('/', [UserController::class, 'index']);
Route::get('/home', [LuckyController::class, 'index']);
Route::post('/bet', [BetSlotsController::class, 'store']);
Route::get('/get-lucky-data', [LuckyController::class, 'getLuckyData']);
