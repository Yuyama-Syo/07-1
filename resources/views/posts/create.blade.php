<!DOCTYPE HTML>
<html lang="{{str_replace("_","_",app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <! -- Fonts  -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action ="/posts" method="POST">
            @csrf
             <div class="title">
                 <h2>Title</h2>
                 <input type="text" name="post[title]" placeholder="タイトル"/>
             </div>
             <div class="body">
                 <h2>Body</h2>
                  <textarea name="post[message]" placeholder="今日も1日お疲れ様でした"></textarea>
             </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>