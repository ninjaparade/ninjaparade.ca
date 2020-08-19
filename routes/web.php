<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('blog', [PostController::class, 'index'])->name('posts.index');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('tags/{tag}', [TagController::class, 'show'])->name('tag.show');

Route::feeds();

Route::get('{slug}', [PageController::class, 'show'])->name('page.show');
