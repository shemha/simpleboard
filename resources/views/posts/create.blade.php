<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="submit">
    </form>
</body>
</html>