<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostForm extends Component
{
    public $title;
    public $description;
    public $content;
    public $is_active = false;
    public $is_verificate = false;
    public $user_id = '';

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required|max:255',
            'content' => 'required|min:12|max:255',
            'is_active' => 'boolean',
            'is_verificate' => 'boolean',
            'user_id' => 'integer'
        ], [
            'title.required' => 'Это поле не должно быть пустым',
            'description.required' => 'Это поле не должно быть пустым',
            'description.max' => 'Кол-во символов не должно превышать 255',
            'content.required' => 'Это поле не должно быть пустым',
            'content.min' => 'Кол-во символов не должно быть меньше 12',
            'content.max' => 'Кол-во символов не должно превышать 255',
            'is_active' => 'Ошибка активновсти',
            'is_verificate' => 'Ошибка проверки',
            'user_id' => 'Ошибка пользователя',
        ]);

        Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'is_active' => $this->is_active,
            'is_verificate' => $this->is_verificate,
            'user_id' => Auth::user()->id,
        ]);
    }
    public function render()
    {
        return view('livewire.post-form');
    }
}
