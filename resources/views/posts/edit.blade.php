<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit-page</title>
</head>
<body>
    <form method="POST" action="/posts/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{ $post->title }}">
        <input type="text" name="content" value="{{ $post->content }}">
        <input type="submit">
    </form>
</body>
</html>