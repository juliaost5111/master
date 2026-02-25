<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/city/{user}', [UserController::class, 'gorod']);

Route::get('/user/{surname}/{name}', [UserController::class, 'full']);

Route::get('/user/{name}', [UserController::class, 'chelovek']);

Route::get('/user/all', [UserController::class, 'all']);

Route::get('/user', [UserController::class, 'show']);

Route::get('/post/{id}', [PostController::class, 'show']);


