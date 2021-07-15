@extends('layouts.app')

@section('content')

    <h3>”セリエＡ順位表”</h3>
    
    <table border="1">
        <thead>
            <tr>
                <th>順位</th>
                <th>クラブ</th>
                <th>勝ち点</th>
                <th>試合</th>
                <th>勝</th>
                <th>分</th></th>
                <th>負</th>
                <th>直近5試合</th>
                
            
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $datum)
                <tr>
                    <td>{{ $datum["position"] }}</td>
                    <td>{{ $datum["team"]["name"] }}</td>
                    <td>{{ $datum[ "points"] }}</td>
                    <td>{{ $datum["playedGames"] }}</td>
                    <td>{{ $datum["won"] }}</td>
                    <td>{{ $datum["draw"] }}</td>
                    <td>{{ $datum["lost"] }}</td>
                    <td>{{ $datum["form"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @if(Auth::user())
    <h2><a href='/loginmenu'>戻る</a></h2><h2>
    @else
    <a href='/'>戻る</a></h2>
    @endif


@endsection