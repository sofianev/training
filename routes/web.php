<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', ProductController::class);
Route::post('product/AddCart', [App\Http\Controllers\CartController::class, 'AddCart'])->name('add_to_cart');
Route::get('product/MesCommandes', [App\Http\Controllers\CartController::class, 'MesCommandes'])->name('propre.commandes');


Route::get('{any}', function () {
    return view('articles.index');
})->where('any', '.*');
