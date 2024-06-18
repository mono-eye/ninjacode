<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題002</title>
</head>

<body>
  <p>02 「配列を並び替えよう」</p>
  <p>
  <?php
    $numbers = array(1, 3, 10, 2.5, 0, -1, 2);

    // 数値の配列を小さい順に並び替え
    sort($numbers);

    // 並び替えた結果を画面に表示
    foreach ($numbers as $number) {
        echo $number . " <br> " ;
    }
  ?>
  </p>


</body>

</html>