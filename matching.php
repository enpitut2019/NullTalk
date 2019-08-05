<?php
    // セッション開始！
    $check = session_start();

    if(!isset($check)){
        print("セッションの確立に失敗しました");
      }
      $session_id = session_id();
      $url = parse_url(getenv("DATABASE_URL"));
      $con = pg_connect("host=" . $url['host'] . " port=" 
      . $url['port'] . " dbname=" . substr($url['path'], 1)
      . " user=" . $url['user'] . " password=" . $url['pass']);
    
      $res = pg_query($con, "SELECT uid FROM users WHERE session_id = '".$session_id."'"); #or die("クエリ実行エラーです" . pg_last_error());
            
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ぬるトーク</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style type='text/css'>
        body {
            background-color: #ddd;
            color: #333333;
            e-height: 1;
        }
        input {
            width: 360px;
            height: 160px;
            font-size: 60px;
        }
    </style>
</head>

<body>
    <h1>友達を指定します</h1>
    <p>合言葉を入力してください</p>
    <input type="text" name="name" size="30" maxlength="4">
    <button type="button" onclick="location.href='result.html'" name="result">GO!</button>
</body>

</html>