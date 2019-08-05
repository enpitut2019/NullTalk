<?php
// セッション開始！
$flg = session_start();
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
    <h1>test</h1>
    <a href="test2.php">test2</a><br />
    <?php
        #$ttt = $_SERVER['HTTP_USER_AGENT']; 
        #print($ttt);

        if( $flg === true ){
            // セッションIDを取得
            echo session_id();
        } else {
            echo "セッションの作成に失敗しました！";
        }   
    ?>
</body>

</html>