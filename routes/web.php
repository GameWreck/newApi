<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\ArtisanCommands;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\ProductApiController;
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

Route::get('/token', function () { return csrf_token(); });
Route::get('/artisan/create',[ArtisanCommands::class,'generate']);
Route::get('/artisan/delete',[ArtisanCommands::class,'delete']);
Route::get('/artisan/migrate',[ArtisanCommands::class,'migrate']);
Route::get('/artisan/migrate/fresh',[ArtisanCommands::class,'migratefresh']);


//API User ENDPOINTS
Route::get('/api/users', [UserApiController::class,'index']);
Route::post('/api/users/add',[UserApiController::class,'store']);
Route::put('/api/users/{id}',[UserApiController::class,'update']);
Route::delete('/api/users/{id}',[UserApiController::class,'destroy']);

//API Product Endpoints
Route::get('/api/products', [ProductApiController::class,'index']);
Route::post('/api/products/add',[ProductApiController::class,'store']);
Route::put('/api/products/{id}',[ProductApiController::class,'update']);
Route::delete('/api/products/{id}',[ProductApiController::class,'destroy']);

