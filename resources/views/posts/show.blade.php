<!DOCTYPE HTML>
@extends('layouts.app')　

@section('content')
<html lang="{{str_replace("_","_",app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <! -- Fonts  -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{$post->title}}
        </h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <input onclick="deletePost()" value="delete" type="button"> 
        </form>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p>{{$post->body}}</p>
            </div>
        </div>
        <div class="footer">
            <a href="">{{ $post->category->name }}</a>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <a href="/">戻る</a>
        </div>
        <script>
        function deletePost(){
            'use strict';
            if(confirm('削除すると復元できません．\n本当に削除しますか')){
                document.getElementById('form_delete').submit();
            }
        }
        </script>
    </body>
</html>
@endsection