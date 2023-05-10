<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a class="btn btn-primary" href="{{ route('post.create') }}">create post</a>
    @foreach ($posts as $post)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <div class="card-footer">
                    comments
                    <div class="float-right">
                        @foreach ($post->comments as $comment)
                            <div>
                                {{ $comment->content }}
                            </div>
                        @endforeach
                        <form action="{{ route('comments.create') }}" method="POST">
                            @csrf
                            <input type="text" name="content" class="form-control">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button type="submit" class="btn btn-primary">comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</body>

</html>
