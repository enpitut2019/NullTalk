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
  <h1>あなたの趣味はこちらです</h1>
  <div class="listCenter">
    <ul>
      <?php
        $check = session_start();
        if(!isset($check)){
          print("セッションの確立に失敗しました");
        }
        $session_id = session_id();

        $url = parse_url(getenv("DATABASE_URL"));
        $con = pg_connect("host=" . $url['host'] . " port=" 
          . $url['port'] . " dbname=" . substr($url['path'], 1)
          . " user=" . $url['user'] . " password=" . $url['pass']);

        $res_uid = pg_query($con, "SELECT uid FROM users WHERE session_id = '".$session_id."'"); #or die("クエリ実行エラーです" . pg_last_error());
        $uid = pg_fetch_row($res_uid)[0];

        $res_hids = pg_query($con, "SELECT hid FROM user_hobbies WHERE uid = '".$uid."'"); # or die("クエリ実行エラーです" . pg_last_error());
        while($hid = pg_fetch_row($res_hids)) {
          $hobby_name = pg_query($con, "SELECT hobby_name FROM hobbies WHERE hid=".$hid[0]); 
          echo '<li><a style="font-size: 80px ">';
          echo pg_fetch_row($hobby_name)[0];
          echo '</a></li>';
        }
      ?>
      
    </ul>
    <a href="index.php">戻る</a>
  </div>
</body>

</html>