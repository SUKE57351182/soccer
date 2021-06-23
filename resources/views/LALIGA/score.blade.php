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
    <h3 class="mx-3">
        【ラリーガ 個人成績】
    </h3>
    <table border="1">
        <thead>
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
   
</body>
</html>