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

        li {
            font-size: 25px;
            color: #006;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>
        あなたとxxさんの共通の趣味は<br>こちらです
    </h1>

    <?php
        $url = parse_url(getenv("DATABASE_URL"));
        $con = pg_connect("host=" . $url['host'] . " port=" 
        . $url['port'] . " dbname=" . substr($url['path'], 1)
        . " user=" . $url['user'] . " password=" . $url['pass']);

        $password = $_GET["password"];

        if (isset($password)) {
            $res = pg_query($con, "SELECT uid FROM rooms WHERE password='".$password."'");
            $uid = pg_fetch_row($res)[1];
            print($uid);
        }
    ?>
    <ul>
        <li><a style="font-size: 80px ">ゴルフ</a></li>
        <li><a style="font-size: 80px ">アニメ</a></li>
        <li><a style="font-size: 80px ">刀</a></li>
    </ul>
    <a href="index.html">戻る</a>
</div>
</body>

</html>