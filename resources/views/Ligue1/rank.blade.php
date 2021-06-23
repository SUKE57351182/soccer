<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="csrf-token">
  <title>Soccer-FUT</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h3>”リーグアン順位表”</h3>
    
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
   
</body>
</html>