<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog', [PostController::class, 'blog'])->name('posts.blog');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/subscribe', [ContactController::class, 'subscribe'])->name('contact.subscribe');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
