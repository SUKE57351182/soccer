@extends('layouts.app')

@section('content')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>SOCCER BLOG</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            @csrf
            {{ method_field('delete') }}
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">削除</span>]</p>
        </form>
        <div class='posts'>
                <div class='post'>
                    <h2 class='title'>{{ $post->tittle }}</h2>
                    <P class='body'>{{ $post->body }}</P>
                    <P class='updated_at'>{{ $post->updated_at }}</P>
        </div>
        <div class="back"><a href='/posts'>戻る</a></div>
        
        <script>
        function deletePost(e){
            'use strict';
            if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                document.getElementById('form_delete').submit();
            }
        }
        </script>
@endsection
