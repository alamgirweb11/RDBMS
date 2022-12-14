<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/users', [HomeController::class,'users'])->name('users');
Route::get('/categories', [HomeController::class,'categories'])->name('category');
Route::get('/mechanics', [HomeController::class,'mechanics'])->name('mechanics');
Route::get('/projects', [HomeController::class,'projects'])->name('projects');
Route::get('/images', [HomeController::class,'images'])->name('images');
Route::get('/comments', [HomeController::class,'comments'])->name('comments');
