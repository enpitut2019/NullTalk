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
  <input type="submit" name="add_list" value="趣味を追加">
  <?php
    $url = parse_url(getenv("DATABASE_URL"));
    $con = pg_connect("host=" . $url['host'] . " port=" 
     . $url['port'] . " dbname=" . substr($url['path'], 1)
     . " user=" . $url['user'] . " password=" . $url['pass']);
    print("A");
    if (isset($_POST["add_list"])) {
        print("B");
        $res = pg_query($con, "INSERT INTO hobbies VALUES(1, 'ゲーム')") or die("クエリ実行エラーです" . pg_last_error());
        print($res);
    }
  ?>
</body>

</html>