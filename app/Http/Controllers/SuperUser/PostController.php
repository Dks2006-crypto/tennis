<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Главная страница
    public function index()
    {
        return view('superuser.posts.index', [
            'pageTitle' => 'Мои посты'
        ]);
    }

    // Страница создания поста
    public function create()
    {
        return view('superuser.posts.create', [
            'pageTitle' => 'Новый пост'
        ]);
    }
}
