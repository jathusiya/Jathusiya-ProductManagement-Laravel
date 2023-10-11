<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('layouts/welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@create');


Route::get('/register',[App\Http\Controllers\auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register',[App\Http\Controllers\auth\RegisterController::class, 'create']);

Route::get('/login', [App\Http\Controllers\auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\auth\LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Show the create form
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Store a new product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Show a specific product
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Show the edit form for a product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update a product
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Delete a product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
