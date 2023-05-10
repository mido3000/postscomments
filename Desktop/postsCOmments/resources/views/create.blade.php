<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                placeholder="post title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post content</label>
            <input type="text" name="content" class="form-control" id="exampleFormControlInput1"
                placeholder="post content">
        </div>
        <button type="submit">create post</button>
    </form>

</body>

</html>
