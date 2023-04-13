<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsApiController;

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

Route::get('/select', [productsApiController::class,'select']);
Route::get('/detail/{id}', [productsApiController::class,'detail']);
Route::post('/insert',[productsApiController::class,'insert']);
Route::put('/update/{id}', [productsApiController::class,'update']);
Route::delete('/delete/{id}',[productsApiController::class,'delete']);
