<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/articoli', [ArticleController::class, 'index'])
->name('articles.index');

Route::get('/articoli/aggiungi', [ArticleController::class, 'create'])
->name('articles.create');

Route::get('/articoli/modifica/{id}', [ArticleController::class, 'edit'])
->name('articles.edit');