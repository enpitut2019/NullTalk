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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

        

<body>
    <h1>相手を待っています</h1>
    <script>
        $(function() {
        var POLLLING_INVERVAL_TIME_IN_MILLIS = 2000;//1s
        window.setTimeout(polling, POLLLING_INVERVAL_TIME_IN_MILLIS);
  
  function polling() {
    window.location.href = "result.html";
    //window.setTimeout(polling, POLLLING_INVERVAL_TIME_IN_MILLIS);
    //getCountUp();
  };

  function getCountUp() {
    $.ajax({
    type : "GET",
    url : "waitUser.php",
    content : "application/json",
    dataType : "json",
  }).done(function(data) {
    console.log(data);
    window.location.href = "result.html";
  }).fail(function(jqXHR, textStatus) {
    console.log(data);
    });
  }
});
</script>
</body>

</html>