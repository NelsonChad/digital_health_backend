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
    return view('auth.login');
});

Route::group(['middleware' => ['auth','isAdmin'], 'namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/users', [App\Http\Controllers\admin\UserController::class, 'index'])->name('admin.users');
    Route::get('/users/show/{id}', [App\Http\Controllers\admin\UserController::class, 'show'])->name('admin.user.show');
    Route::get('/users/alter/{id}', [App\Http\Controllers\admin\UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/users/update/{id}', [App\Http\Controllers\admin\UserController::class, 'update'])->name('admin.user.update');
    Route::get('/pharmacies', [App\Http\Controllers\admin\PharmaciesController::class, 'index'])->name('admin.pharmacies');

    Route::post('/pharmacies', [App\Http\Controllers\admin\PharmaciesController::class, 'store'])->name('admin.pharmacies.store');
    Route::post('/pharmacies/update/{id}', [App\Http\Controllers\admin\PharmaciesController::class, 'update'])->name('admin.pharmacies.update');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
    Route::get('home/add-category', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::get('home/add-brand', [App\Http\Controllers\CategoryController::class, 'create'])->name('brand.create');
    Route::post('home/add-category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::post('home/brand/store', [App\Http\Controllers\CategoryController::class, 'storeBrend'])->name('brand.store');
    Route::get('home/list-category', [App\Http\Controllers\CategoryController::class, 'index'])->name('list.index');
    Route::get('home/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
    Route::get('home/add-products', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
    Route::post('home/add-products', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
    Route::get('home/supliers', [App\Http\Controllers\SuplierController::class, 'index'])->name('suppliers');
    Route::post('home/supliers', [App\Http\Controllers\SuplierController::class, 'store'])->name('suppliers');  
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index']);
    
});
