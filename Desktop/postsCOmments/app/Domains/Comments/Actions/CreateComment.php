<?php

namespace App\Domains\Comments\Actions;

use App\Domains\Comments\Entities\Comment;
use App\Interfaces\Contract;


class CreateComment implements Contract
{
    public $content;
    public $post_id;
    public function __construct($post_id, $content)
    {
        $this->content = $content;
        $this->post_id = $post_id;
    }
    public function execute()
    {

        Comment::create([
            'content' => $this->content,
            'post_id' => $this->post_id
        ]);

        return $message = 'comment created successfully';
    }
}
