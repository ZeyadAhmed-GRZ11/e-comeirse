<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
// use App\Http\Middleware\adminData;
// use App\Http\Middleware\Authenticate;
// use App\Http\Middleware\auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('welcome', [App\Http\Controllers\CategoryController::class,'welcome']);
Route::get('categories', [App\Http\Controllers\CategoryController::class,'index']);
Route::get('categories/create', [App\Http\Controllers\CategoryController::class,'create']);
Route::post('categories/create', [App\Http\Controllers\CategoryController::class,'store']);
Route::get('categories/{id}/edit', [App\Http\Controllers\CategoryController::class,'edit']);
Route::put('categories/{id}/edit', [App\Http\Controllers\CategoryController::class,'update']);
Route::get('categories/{id}/delete', [App\Http\Controllers\CategoryController::class,'destroy']);
Route::get('qa', [App\Http\Controllers\CategoryController::class,'qa']);
Route::get('/', [App\Http\Controllers\CategoryController::class,'view']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/users/{user}', 'UserController@show')->middleware('adminData');
