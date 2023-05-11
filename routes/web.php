<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'create'])->name('create.page');
Route::post('/post', [PostController::class, 'post'])->name('post.create');
Route::get('/viewfile', [PostController::class, 'viewfile'])->name('view.file');
