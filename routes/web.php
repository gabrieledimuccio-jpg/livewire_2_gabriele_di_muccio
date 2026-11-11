<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

// INDEX
Route::get('articles/index', [ArticleController::class, 'index'])->name('index');

// CREATE
Route::get('articles/create', [ArticleController::class, 'create'])->name('create');

// STORE
Route::post('articles/store', [ArticleController::class, 'store'])->name('store');

// SHOW
Route::get('articles/show/{article}', [ArticleController::class, 'show'])->name('show');

// EDIT
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('edit');

// UPDATE
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('update');

// DESTROY
Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('destroy');