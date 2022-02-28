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
    return view('index');
})->name('home');
Route::get('/movies', function () {
    return view('movies');
})->name('movies');
Route::get('/movies/{movie}', [\App\Http\Controllers\MovieController::class, 'show'])->name('movie');
Route::get('/movie/{category}',[\App\Http\Controllers\MovieController::class,'category'])->name('category');
Route::get('/tv',function (){
    return view('series');
})->name('series');
Route::get('/series/{show}',[\App\Http\Controllers\TvController::class,'show'])->name('show');
Route::get('/tv/{category}',[\App\Http\Controllers\TvController::class,'category'])->name('tvCategory');
