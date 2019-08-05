
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
        input {
            width: 360px;
            height: 160px;
            font-size: 60px;
        }
    </style>
</head>

<body>
    <h1>友達を指定します</h1>
    <p>合言葉を入力してください</p>
    <form action="waiting.php" method="post">
        <input type="text" name="password" size="30" maxlength="4">
        <input class="addButton" type="submit" name="matching" value="GO!">
    </form>
</body>

</html>