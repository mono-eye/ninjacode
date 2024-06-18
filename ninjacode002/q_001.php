<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題001</title>
</head>

<body>
  <p>01 16進数で表現しよう</p>
  <p>
  <?php
  $decimal = 6954;
  $hexadecimal = dechex($decimal);
  echo $hexadecimal;  // 1b2a
  ?>
  </p>


</body>

</html>