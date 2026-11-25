<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        #Получение всех пользователей из модели
        $posts = Post::all();
        #Возвращене представления (страницы) вместе с массивом пользователей
        return view('posts.index', compact('posts'));
    }
}
