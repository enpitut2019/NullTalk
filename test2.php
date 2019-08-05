<?php
// セッション開始！
 session_start();
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
    <h1>test2</h1>
    <?php
        #$ttt = $_SERVER['HTTP_USER_AGENT']; 
        #print($ttt);

        // セッションIDを取得
        print(session_id());
    ?>
</body>

</html>