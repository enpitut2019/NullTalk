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

      text-align: left;
      padding-left: 100px;
    }
  </style>
</head>

<body>
  <h1 style="font-size: 80px ">追加する趣味を選んでください</h1>
  <form action="addListResult.php" method="post">
    <div class="addHobbyList">
      <label><input type="checkbox" name="hobbyAdd[]" value="ゴルフ">ゴルフ</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="アニメ">アニメ</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="刀">刀</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="フィギュア">フィギュア</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="ランニング">ランニング</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="野球">野球</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="VTuber">VTuber</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="レンズ">レンズ</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="ラーメン">ラーメン</input><br /></label>
      <label><input type="checkbox" name="hobbyAdd[]" value="音MAD">音MAD</input><br /></label>
    </div>
    <input class="addButton" type="submit" name="addList" value="追加">
  </form>



</body>

</html>