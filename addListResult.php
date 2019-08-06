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

<?php
    $url = parse_url(getenv("DATABASE_URL"));
    $con = pg_connect("host=" . $url['host'] . " port=" 
    . $url['port'] . " dbname=" . substr($url['path'], 1)
    . " user=" . $url['user'] . " password=" . $url['pass']);



?>


<body>
  <h1 style="font-size: 80px ">趣味を追加しました</h1>

  <a href="myList.php">確認</a><br />
  <a href="index.html">戻る</a><br />
  <?php
    
    foreach($_POST["hobbyAdd"] as $hobby_name){
        if (isset($hobby_name)) {

            $res_uid = pg_query($con, "SELECT uid FROM users WHERE session_id = '".$session_id."'"); #or die("クエリ実行エラーです" . pg_last_error());
            $uid = pg_fetch_row($res_uid)[0];

            
            $res_hid = pg_query($con, "SELECT hid FROM hobbies WHERE hobby_name = '".$hobby_name."'") or die("クエリ実行エラーです" . pg_last_error());
            $hid = pg_fetch_row($res_uid)[0];

            $res_ins = pg_query($con, "INSERT INTO user_hobbies VALUES($uid, $hid)");
            #print($res);
        }
    }
  ?>
</body>

</html>