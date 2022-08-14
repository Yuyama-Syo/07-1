<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
    </head>
    <body>
        {{Auth::user()->name}}
        <h1>Blog Name</h1>
        <p clas="create">[<a href="/posts/create">create</a>]</p>
        
        <div class="posts">
             @foreach ($posts as $post)
               <h2 class="title">
                   <a href="/posts/{{$post->id}}">{{$post->title}}</a>
               </h2>
               <a href="">{{ $post->category->name }}</a>
               <p class="body">{{$post->body}}</p>
               <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            @endforeach
        </div>
        <div class="'paginate">
            {{$posts->links() }}
        </div>
    </body>
</html>
@endsection