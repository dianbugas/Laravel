<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Livewire\Article;

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
    return view('users.index');
})->name('users.index');


Route::get('/artivity', ActivityController::class)->name('artivity');

Route::get('/user/{id}', [UserController::class, 'show'])->name('users.details');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::get('/articles', ArticleController::class)->name('articles');
Route::get('/news', NewsController::class)->name('news');
Route::get('/news', NewsController::class)->name('news');
Route::get('/products', function () {
    return view('product');
})->name('product.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
