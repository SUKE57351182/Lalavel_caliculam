<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class="create">[<a href= '/posts/create'>create</a>]</p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
