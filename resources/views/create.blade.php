@extends('layouts.app')

@section('content')
 
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>名前</h2>
                <input type="text" name="post[name]" value=" {{Auth::user()->name}} " readonly/>
            </div>
            <div class="body">
                <h2>投稿内容</h2>
                <textarea name="post[body]" placeholder="投稿内容"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/posts">戻る</a>]</div>

@endsection