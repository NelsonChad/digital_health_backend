<?php

use App\Http\Controllers\api\PharmaciesController;
use App\Http\Controllers\api\ProductsControllor;
use App\Models\Pharmacies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'api'], function(){
    Route::post('/products/search', [ProductsControllor::class, 'search']);
    //Route::get('/products/search', [ProductsControllor::class, 'search']);
    Route::get('/pharmacies', [PharmaciesController::class, 'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
