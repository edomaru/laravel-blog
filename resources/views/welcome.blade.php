<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Posts</h1>
        <a href="/posts/create">New Post</a>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </body>
</html>
