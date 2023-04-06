<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'posts' => Post::all(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // shorthand
//    Route::resource('post', PostController::class);
//    Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');
});

Route::name('post.')->middleware('auth')->group(function () {
    Route::get('/post', [PostController::class, 'index'])->name('index');
    Route::get('/post/create', [PostController::class, 'create'])->name('create');
    Route::post('/post', [PostController::class, 'store'])->name('store');
    Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('show');
    Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/post/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';
