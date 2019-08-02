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
    <h1>あなたの趣味は<br/>こちらです</h1>
    <div class="listCenter">
    <ul>
    <?php
    $res = pg_query($con, "SELECT hobby FROM hobbies WHERE uid=1") or die("クエリ実行エラーです" . pg_last_error());
    
    foreach($res as $hobby) {
        echo '<li><a style="font-size: 80px ">';
        echo $hobby;
        echo '</a></li>';
    }
    ?>
    <!--

        <li><a style="font-size: 80px ">ゴルフ</a></li>
        <li><a style="font-size: 80px ">アニメ</a></li>
        <li><a style="font-size: 80px ">刀</a></li>
        <li><a style="font-size: 80px ">フィギュア</a></li>
        <li><a style="font-size: 80px ">戦車</a></li>
-->
    </ul>
    <a href="index.html">戻る</a>
  </div>
</body>

</html>