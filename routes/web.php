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

Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Route::get('articles', [App\Http\Controllers\ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/create', [App\Http\Controllers\ArticleController::class, 'create'])
    ->name('articles.create');

Route::post('articles', [App\Http\Controllers\ArticleController::class, 'store'])
    ->name('articles.store');

Route::get('articles/{id}', [App\Http\Controllers\ArticleController::class, 'show'])
    ->name('articles.show');
