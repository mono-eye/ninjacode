<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題013</title>
</head>

<body>
  <p>13 数値か確認しよう</p>
  <p>
    <?php
    $list = [-1, 0, 1, "2", "3A", 4.1, [5], "1,000", 1001];

    foreach ($list as $item) {
      if (is_numeric($item)) {
          echo $item . "<br>";
      }
    }






    ?>
  </p>


</body>

</html>