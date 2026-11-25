<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
#Передача параметра
Route::get('/posts/{id}/{userId}', function ($id, $userId) {
    return 'post' . $id . 'by' . $userId;
});

#Передача необязательного параметра
Route::get('/posts/page/{page?}', function ($page = 1) {
    return 'page number' . $page;
});
#https://learnlaravel13-v.local/public/posts/page - 1
#https://learnlaravel13-v.local/public/posts/page12 - 12

#Маршрут на получение из БД всех пользователей
Route::get('/users', [UserController::class, 'index'])->name('users.index');

#маршрут постс
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
