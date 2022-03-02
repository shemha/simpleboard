<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show-page</title>
</head>
<body>
    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }} 

    <a href="/posts/{{ $post->id }}/edit">Edit</a>
</body>
</html>