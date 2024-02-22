<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('home/add-category', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
Route::post('home/add-category', [App\Http\Controllers\CategoryController::class, 'store'])->name('store');
Route::get('home/list-category', [App\Http\Controllers\CategoryController::class, 'index'])->name('list.index');
Route::get('home/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('home/add-products', [App\Http\Controllers\ProductController::class, 'create'])->name('create');



Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index']);
    
});
