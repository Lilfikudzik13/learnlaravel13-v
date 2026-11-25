<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    #Метод получения всех пользователей
    public function index(){
        #Получение всех пользователей из модели
        $users = User::all();
        #Возвращене представления (страницы) вместе с массивом пользователей
        return view('users.index', compact('users'));
    }
}
