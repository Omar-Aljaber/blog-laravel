<?php

use App\Http\Controllers\CommentsCotroller;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostsController::class);

Route::post('posts/create', [PostsController::class, 'store']);
Route::post('posts/{post}/comments', [CommentsCotroller::class, 'store']);
