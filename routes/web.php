<?php

use App\Http\Livewire\Orders;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeUser::class, 'index'])->name('home.user');

Route::get('/boutique', [App\Http\Controllers\HomeUser::class, 'boutique'])->name('boutique.user');

Route::get('/add-to-cart/{id}', [App\Http\Controllers\HomeUser::class, 'addCart'])->name('cart.user')->middleware('auth');
Route::get('/checkout', [App\Http\Controllers\HomeUser::class, 'checkout'])->name('checkout')->middleware('auth');
Route::get('/orders', Orders::class)->name('orders')->middleware('auth');
Route::get('/addProduct/user', [App\Http\Controllers\HomeUser::class, 'addProduct'])->name('addProduct')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
