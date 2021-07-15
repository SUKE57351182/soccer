@extends('layouts.app')

@section('content')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
   
        <h1>SOCCER BLOG</h1>
        <p class='create'>[<a href='/posts/create'>作成</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href='/posts/{{ $post->id}}'><h2 class='name'>{{ $post->name }}</h2></a>
                    <P class='body'>{{ $post->body }}</P>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        <h2><a href='/loginmenu'>戻る</a></h2>
@endsection