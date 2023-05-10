<?php

namespace App\Domains\Posts\Actions;

use App\Domains\Posts\Entities\Post;
use App\Interfaces\Contract;

class CreatePost implements Contract
{
    public $title;
    public $content;
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
    public function execute()
    {
        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        return $message = 'post created successfully';
    }
}
