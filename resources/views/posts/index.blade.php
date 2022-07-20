<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="posts">
             @foreach ($posts as $post)
               <h2 class="title">{{$post->title}}</h2>
               <p class="body">{{$post->body}}</p>
            @endforeach
        </div>
        <div class="'paginate">
            {{$posts->links() }}
        </div>
    </body>
</html>