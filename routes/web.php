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
// ini route list componen
Route::get('/', function () {
	return view('welcome');
});



Auth::routes();

Route::resource('category', App\Http\Controllers\CategoryController::class);
Route::resource('Product', App\Http\Controllers\ProductController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
