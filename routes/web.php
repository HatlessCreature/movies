<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenresController;

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

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movie');
Route::post('/create', [MovieController::class, 'store']);
Route::post('/movies/{movie}/comments', [CommentController::class, 'store'])->name('createComment');
Route::get('/genres/{genre}', [GenresController::class, 'show'])->name('genre');

