<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ぬるトーク</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <style>
    #main {
      width: 100vw;
      height: auto;
    }
  </style>
</head>

        

<body>
  <div id="header">
    <a id="title" href="index.php">ぬるカラオケ</a>
    <ul id="menu">
      <li><a href="index.php">ホーム</a></li>
      <li><a href="myList.php">曲の閲覧</a></li>
      <li><a href="addList.php">曲の追加</a></li>
      <li><a href="matching.php">マッチング</a></li>
    </ul>
  </div>
  <div id="main">
    <h1>あなたの登録した曲はこちらです</h1>
    <div class="listCenter">
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
            echo '<a style="font-size: 20px ">';
            echo pg_fetch_row($hobby_name)[0];
            echo '</a><br>';
          }
        ?>
      <a href="index.php">戻る</a>
    </div>
  </div>
  <div id="footer">
    <span id="footer_text">Copyright&copy; 2019 ぬるんちゅ All Rights Reserved.</span>
  </div>
</body>

</html>