@extends('layouts.app')

@section('content')
    <h1>おかえりなさい　{{Auth::user()->name}}</h1>
    <h1>'ようこそSOCCER FUT情報へ'</h1>
    
    <h2>
        <ul>
            <li>プレミアリーグ</li>
                <ul>
                    <li> <a href="{{ route('rank',['league'=>'PL']) }}">順位表</a></li>
                    <li><a href="{{ route('score',['league'=>'PL']) }}">得点順位</a></li>
                </ul>
            <li>ラリーガ</li>
                <ul>
                    <li><a href="{{ route('rank',['league'=>'LALIGA']) }}">順位表</a></li>
                    <li><a href="{{ route('score',['league'=>'LALIGA']) }}">得点順位</a></li>
                </ul>
            <li>ブンデスリーグ</li>
                <ul>
                    <li><a href="{{ route('rank',['league'=>'BUNDES']) }}">順位表</a></li>
                    <li><a href="{{ route('score',['league'=>'BUNDES']) }}">得点順位</a></li>
                </ul>
            <li>セリエＡ</li>
                <ul>
                    <li><a href="{{ route('rank',['league'=>'SERIE']) }}">順位表</a></li>
                    <li><a href="{{ route('score',['league'=>'SERIE']) }}">得点順位</a></li>
                </ul>
            <li>リーグアン</li>
                <ul>
                    <li><a href="{{ route('rank',['league'=>'Ligue1']) }}">順位表</a></li>
                    <li><a href="{{ route('score',['league'=>'Ligue1']) }}">得点順位</a></li>
                </ul>
        </ul>
    </h2>
    
    <h2>
        <ul>
            <li><a href="/posts">掲示板</a></li>
            <li>（*現在なし*）ブログ</li>
        </ul>
    </h2>
@endsection

