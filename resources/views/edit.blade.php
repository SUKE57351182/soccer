@extends('layouts.app')

@section('content')
 
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="post[name]" value=" {{ $post->name }}" readonly/>
            </div>
            <div class="body">
                <h2>投稿内容</h2>
                <textarea name="post[body]" placeholder="投稿内容">{{ $post->body}}</textarea>
            </div>
            <input type="submit" value="更新"/>
        </form>
        <div class="back">[<a href="/posts">戻る</a>]</div>
 
 @endsection