<?php

namespace App\Domains\Posts\Actions;

use App\Domains\Posts\Entities\Post;
use App\Interfaces\Contract;

class ShowPosts implements Contract
{
    public function __construct()
    {
    }
    public function execute()
    {
        return Post::all();
    }
}
