<?php

namespace App\Http\Controllers;

use App\Domains\Posts\Actions\CreatePost;
use App\Domains\Posts\Actions\ShowPosts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = new ShowPosts();
        $posts = $posts->execute();
        return view('index', compact('posts'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:3',
        ]);
        $create_post = new CreatePost($request->title, $request->content);
        $message = $create_post->execute();

        return redirect('/posts')->with('message', $message);
    }
}
