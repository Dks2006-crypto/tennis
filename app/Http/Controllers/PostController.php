<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_verificate', true)->where('is_active',true)->get();
        return view('web.sections.post.post', [
            'title' => 'Статьи',
            'posts' => $posts
        ]);
    }
}
