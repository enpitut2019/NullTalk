<?php
  $check = session_start();
  if(isset($check)){
    print("セッションの確立に失敗しました");
  }
  $session_id = session_id();
  $url = parse_url(getenv("DATABASE_URL"));
  $con = pg_connect("host=" . $url['host'] . " port=" 
  . $url['port'] . " dbname=" . substr($url['path'], 1)
  . " user=" . $url['user'] . " password=" . $url['pass']);

  $res = pg_query($con, "INSERT INTO users VALUES(".$session_id.")") or die("クエリ実行エラーです" . pg_last_error());
          
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
  </style>
</head>

<body>
  <h1 style="font-size: 80px ">ぬるトークへようこそ</h1>
  <button type="button" onclick="location.href='addList.php'" name="list">あなたの趣味を追加</button><br />
  <button type="button" onclick="location.href='myList.php'" name="list">あなたの趣味を確認</button><br />
  <button type="button" onclick="location.href='matching.html'" name="matching">友達と同じ趣味を探す</button><br />
</body>

</html>