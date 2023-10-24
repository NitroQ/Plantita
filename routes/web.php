<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// client
Route::get('/', [PageController::class, 'index'])->name('index');





// admin
Route::get('/admin', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/transactions', [PageController::class, 'transactions'])->name('transactions');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/plantcare', [PageController::class, 'plantcare'])->name('plantcare');
Route::get('/users', [PageController::class, 'users'])->name('users');
