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

// entry pages
Route::get('/signin', [PageController::class, 'signin'])->name('signin');
Route::get('/signup', [PageController::class, 'signup'])->name('signup');

// contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// about
Route::get('/about', [PageController::class, 'about'])->name('about');

// order confirmation
Route::get('/order-confirmation', [PageController::class, 'orderConfirmation'])->name('order-confirmation');

// error pages
Route::get('/product-failed', [PageController::class, 'productFailed'])->name('product-failed');
Route::get('/product-cancelled', [PageController::class, 'productCancelled'])->name('product-cancelled');
Route::get('/error404', [PageController::class, 'error404'])->name('error404');



