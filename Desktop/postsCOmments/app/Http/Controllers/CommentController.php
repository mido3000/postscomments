<?php

namespace App\Http\Controllers;

use App\Domains\Comments\Actions\CreateComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'post_id' => 'required',
        ]);

        $create_comment = new CreateComment($request->post_id, $request->content);
        $message = $create_comment->execute();

        return redirect('posts')->with('message', $message);
    }
}
