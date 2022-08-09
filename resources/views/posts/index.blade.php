<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
    </head>
    <body>
        <h1>Blog Name</h1>
        <p clas="create">[<a href="/posts/create">create</a>]</p>
        
        <div class="posts">
             @foreach ($posts as $post)
               <h2 class="title">
                   <a href="/posts/{{$post->id}}">{{$post->title}}</a>
               </h2>
               <p class="body">{{$post->body}}</p>
            @endforeach
        </div>
        <div class="'paginate">
            {{$posts->links() }}
        </div>
    </body>
</html>
