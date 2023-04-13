<?php

use App\Http\Controllers\productsController;
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

Route::get('/products', [productsController::class,'select']);
Route::get('/product/insert', [productsController::class,'insert']);
Route::post('/product/insert', [productsController::class,'afterInsert']);
Route::get('/products/{id}/update', [productsController::class,'update']);
Route::put('/products/update/{id}', [productsController::class,'afterUpdate']);
Route::delete('/products/{id}', [productsController::class,'delete']);