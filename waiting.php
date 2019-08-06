<?php
    // セッション開始！
    $check = session_start();

    if(!isset($check)){
        print("セッションの確立に失敗しましたよ");
      }
      $session_id = session_id();
      $url = parse_url(getenv("DATABASE_URL"));
      $con = pg_connect("host=" . $url['host'] . " port=" 
      . $url['port'] . " dbname=" . substr($url['path'], 1)
      . " user=" . $url['user'] . " password=" . $url['pass']);
    
      $res = pg_query($con, "SELECT uid FROM users WHERE session_id = '".$session_id."'"); #or die("クエリ実行エラーです" . pg_last_error());
      $uid = pg_fetch_row($res)[0];
      $password = $_POST["password"];
      echo $password;

      $res = pg_query($con, "INSERT INTO rooms(password, uid) VALUES('".$password."', '".$uid."')"); #or die("クエリ実行エラーです" . pg_last_error());
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <h1>waiting</h1>
    <script>
    $(function() {
        var POLLLING_INVERVAL_TIME_IN_MILLIS = 1000;//1s
        (function polling() {
            getCountUp();
            window.setTimeout(polling, POLLLING_INVERVAL_TIME_IN_MILLIS);
        }());
        function getCountUp() {
            $.ajax({
                type : "GET",
                url : "waitingUser.php",
                content : "application/json",
                dataType : "json",
                data:{
                    "password": <?php $password ?>,
                    "uid": <?php $uid?>
                }
            }).done(function(data) {
                console.log(data['val']);
                if(data['val'] == 'success'){
                    window.location.href = 'result.html';
                }
            }).fail(function(jqXHR, textStatus) {
                console.log(data);
            });
        }
    });
</script>
</body>

</html>