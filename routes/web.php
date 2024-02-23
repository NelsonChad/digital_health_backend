<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth','isAdmin'], 'namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/users', [App\Http\Controllers\admin\UserController::class, 'index'])->name('admin.users');
    Route::get('/users/show/{id}', [App\Http\Controllers\admin\UserController::class, 'show'])->name('admin.user.show');
    Route::get('/users/alter/{id}', [App\Http\Controllers\admin\UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/users/update/{id}', [App\Http\Controllers\admin\UserController::class, 'update'])->name('admin.user.update');
  
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
