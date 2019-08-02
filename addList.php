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
      <div class="chkbox">
	      <input type="checkbox" id="chkbox1" name="chkbox1" value="0" />
	      <label for="chkbox1">料理1</label>
      </div>
      <div class="chkbox">
	      <input type="checkbox" id="chkbox2" name="chkbox2" value="0" />
	      <label for="chkbox2">料理2</label>
      </div>
      <div class="chkbox">
	      <input type="checkbox" id="chkbox3" name="chkbox3" value="0" />
	      <label for="chkbox3">料理3</label>
      </div>
      <div class="chkbox">
	      <input type="checkbox" id="chkbox4" name="chkbox4" value="0" />
	      <label for="chkbox4">料理4</label>
      </div>
      <div class="chkbox">
	      <input type="checkbox" id="chkbox5" name="chkbox5" value="0" />
	      <label for="chkbox5">料理5</label>
      </div>
    </div>
    <input class="addButton" type="submit" name="addList" value="追加">
  </form>



</body>

</html>