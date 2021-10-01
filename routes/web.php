<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Caster\RedisCaster;

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
    return redirect()->route('home');
});
Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//rute baru
Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('is_admin');

//rute product
Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('is_admin');

//rute order
Route::resource('order', App\Http\Controllers\OrderController::class)->middleware('is_admin');

