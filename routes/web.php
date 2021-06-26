<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/today',[PostController::class,'today']);
Route::view('/posts/create', 'create');
Route::post('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post');




Auth::routes();
Route::get('posts/myPosts/{id}',[PostController::class,'myposts'])->name('myposts');
Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('show');
