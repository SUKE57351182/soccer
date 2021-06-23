<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="csrf-token">
  <title>Soccer-FUT </title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h1>おかえりなさい　<?php $user = Auth::user(); ?>{{ $user->name }}</h1>
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
            <li>掲示板</li>
            <li>（*現在なし*）ブログ</li>
        </ul>
    </h2>
    
    <a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf
</body>
</html>