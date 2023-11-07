<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareController;
use App\Http\Controllers\UserController;


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
Route::get('/products/view', [PageController::class, 'productShow'])->name('products.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// AUTHENTICATION
Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signin', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){


   Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function(){
        // ADMIN
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');

        // transactions
        Route::get('/transactions', [PageController::class, 'transactions'])->name('transactions');
        Route::get('/transactions/view', [PageController::class, 'viewTransaction'])->name('view-transaction');
        Route::get('/transactions/pending', [PageController::class, 'pending'])->name('pending');
        Route::get('/transactions/pack', [PageController::class, 'pack'])->name('pack');
        Route::get('/transactions/shipped', [PageController::class, 'shipped'])->name('shipped');

        // product management
        Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/products/add', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/products/add', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/products/{id}/view', [ProductController::class, 'show'])->name('admin.products.view');
        Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::post('/products/{id}/edit', [ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('/products/{id}/delete', [ProductController::class, 'destroy'])->name('admin.products.destroy');

        // plant care information
        Route::get('/plantcare', [CareController::class, 'index'])->name('admin.plantcare.index');
        Route::get('/plantcare/{id}/view', [CareController::class, 'show'])->name('admin.plantcare.view');
        Route::get('/plantcare/{id}/edit', [CareController::class, 'edit'])->name('admin.plantcare.edit');
        Route::post('/plantcare/{id}/edit', [CareController::class, 'update'])->name('admin.plantcare.update');

        // user management
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/view', [UserController::class, 'show'])->name('view-user');
    });
   });

});

// transaction - client
Route::get('/transaction', [PageController::class, 'transaction'])->name('transaction');




