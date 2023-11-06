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

// CLIENT
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/product', [PageController::class, 'publicProduct'])->name('product');

// ADMIN
Route::get('/admin', [PageController::class, 'dashboard'])->name('dashboard');

// transactions
Route::get('/transactions', [PageController::class, 'transactions'])->name('transactions');
Route::get('/transactions/view', [PageController::class, 'viewTransaction'])->name('view-transaction');
Route::get('/transactions/pending', [PageController::class, 'pending'])->name('pending');
Route::get('/transactions/pack', [PageController::class, 'pack'])->name('pack');
Route::get('/transactions/shipped', [PageController::class, 'shipped'])->name('shipped');

// product management
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/add', [PageController::class, 'addProduct'])->name('add-product');
Route::get('/products/view', [PageController::class, 'viewProduct'])->name('view-product');
Route::get('/products/edit', [PageController::class, 'editProduct'])->name('edit-product');

// plant care information
Route::get('/plantcare', [PageController::class, 'plantcare'])->name('plantcare');
Route::get('/plantcare/view', [PageController::class, 'viewPlantInfo'])->name('view-plantinfo');
Route::get('/plantcare/edit', [PageController::class, 'editPlantInfo'])->name('edit-plantinfo');

// user management
Route::get('/users', [PageController::class, 'users'])->name('users');
Route::get('/users/view', [PageController::class, 'viewUser'])->name('view-user');
// entry pages
Route::get('/signin', [PageController::class, 'signin'])->name('signin');
Route::get('/signup', [PageController::class, 'signup'])->name('signup');

// contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
