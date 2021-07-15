@extends('layouts.app')

@section('content')

        【ブンデスリーガ 個人成績】
    </h3>
    <table border="1">
                @if(!empty($data))
            <tr>
                <th scope="col">順位</th>
                <th scope="col">選手名</th>
                <th scope="col">チーム名</th>
                <th scope="col">得点</th>
            </tr>
        </thead>
        <tbody>
                @for($i = 0; $i < 10; $i++)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $data[$i]["player"]["name"] }}</td>
                        <td>{{ $data[$i]["team"]["name"] }}</td>
                        <td>{{ $data[$i]["numberOfGoals"] }}</td>
                    </tr>
                @endfor
            @else
                "データがありません"
            @endif
        </tbody>
    </table>
    
    @if(Auth::user())
    <h2><a href='/loginmenu'>戻る</a></h2><h2>
    @else
    <a href='/'>戻る</a></h2>
    @endif


@endsection