<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostList extends Component
{

    public $postId;

    public function deletePost($id)
    {
        Post::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.post-list', [
            'posts' => Post::where('user_id', Auth::user()->id)->get(),
        ]);
    }
}
