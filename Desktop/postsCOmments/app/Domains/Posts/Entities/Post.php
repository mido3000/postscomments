<?php

namespace App\Domains\Posts\Entities;

use App\Domains\Comments\Entities\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
