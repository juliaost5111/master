<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Vasia',function() {
    return 'Petya';
});
	Route::prefix('blog')->group(function () {
		Route::get('/post/all', function () {
			return 'all';
		});
		Route::get('/post/{id}', function ($id) {
			return $id;
		});
	});
    Route::get('/post/all', function () {
		return 'all';
	})->name('posts');
   Route::get('/test', function () {
		return 'Главная страница сайта';
	});
     Route::get('/dir/test', function () {
		return 'Шапка';
	});
    Route::get('/user/{name}', function ($name): string {
        return 'Hello'. $name;  
    });
      Route::get('/user/{surname}/{name}', function ($surname,$name): string {
        return 'Hello'. $surname .''. $name;  
    });

?>
