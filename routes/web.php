<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return ("This is the About Us Page for our blog");
});

// Posts Routes
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


// Extra Routes (Commented Out)
// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{id}', [PostController::class, '      update'])->name('posts.update');
// Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
// Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
// Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
// Route::get('/posts/filter', [PostController::class, 'filter'])->name('posts.filter');
// Route::get('/posts/sort', [PostController::class, 'sort'])->name('posts.sort');
// Route::get('/posts/filter', [PostController::class, 'filter'])->name('posts.filter');
// Route::get('/posts/sort', [PostController::class, 'sort'])->name('posts.sort');

