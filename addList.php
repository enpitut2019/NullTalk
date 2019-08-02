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
      <label><input type="checkbox" name="hobbyAdd[]" value="料理">ゴルフ</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理2">アニメ</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理3">刀</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理4">フィギュア</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理5">ランニング</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理6">野球</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理7">VTuber</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理8">レンズ</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理9">ラーメン</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="料理9">音MAD</input><br /></label>
    </div>
    <input class="addButton" type="submit" name="addList" value="追加">
  </form>



</body>

</html>