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
    
    foreach($_POST["hobbyAdd"] as $value){
        if (isset($value)) {
            $res = pg_query($con, "INSERT INTO hobbies(hobby_name) VALUES('$value')") or die("クエリ実行エラーです" . pg_last_error());
            #print($res);
        }
    }
  ?>
</body>

</html>