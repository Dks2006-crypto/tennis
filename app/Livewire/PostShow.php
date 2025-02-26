<?php

namespace App\Livewire;

use Livewire\Component;

class PostShow extends Component
{
    public $posts;

    public function mount($posts)
    {
        $this->posts = $posts;
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}
