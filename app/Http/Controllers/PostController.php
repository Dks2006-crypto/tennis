<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('is_verificate', true)->get();
        return view('web.pages.home.index', [
            'titlePage' => 'Статьи',
            'posts' => $post
        ]);
    }
}
