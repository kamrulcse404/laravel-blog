<?php

use App\Http\Controllers\ArticlesController;
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

//index view
Route::get('/', [ArticlesController::class, 'index']);
// Route::get('articles', [ArticlesController::class, 'index']);

//create article view
Route::get('articles/create', [ArticlesController::class, 'create']);
//strore article
Route::post('/', [ArticlesController::class, 'store']);

// Route::get('articles/{id}', [ArticlesController::class, 'show']);
// Route::put('articles/{id}', [ArticlesController::class, 'update']);
// Route::delete('articles/{id}', [ArticlesController::class, 'destroy']);
