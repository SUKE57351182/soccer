<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soccer FUT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   ようこそ  SOCCER FUT情報へ
                </div>

                <div class="links">
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
    </h2>
    <h2>会員登録、ログインをすると掲示板を閲覧、投稿等可能です。</h2>
                </div>
            </div>
        </div>
    </body>
</html>
