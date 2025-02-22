<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'is_active',
        'is_verificate',
        'user_id'
    ];

    // отношение один-к-одному
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
