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
  <h1 style="font-size: 80px ">追加する趣味を選んでください</h1>
  <form action="addListResult.php" method="post">
    <div class="addHobbyList">
      <label><input type="checkbox" name="hobbyAdd[]" value="料理">料理</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理2">料理2</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理3">料理3</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理4">料理4</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理5">料理5</input><br /></label>
    </div>
    <input class="addButton" type="submit" name="addList" value="追加">
  </form>



</body>

</html>