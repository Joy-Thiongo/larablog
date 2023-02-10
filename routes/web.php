<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [BlogsController::class, 'index']);
Route::get('/blogs/create', [BlogsController::class, 'create']);
Route::post('/blogs', [BlogsController::class, 'store']);
Route::get('/comments', [CommentsController::class, 'index']);
Route::get('/comments/create', [CommentsController::class, 'create']);
Route::post('/comments', [CommentsController::class, 'store']);
