<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題006</title>
</head>

<body>
  <p>06 「連想配列を作ろう」</p>
  <p>
  <?php
    $list = ["a", "b", "a", "a", "A", "1", "b", 1];

    // 各要素の出現回数をカウント
    $counts = array_count_values($list);

    // 出現回数を指定された形式で表示
    foreach ($counts as $element => $count) {
        echo "$element: $count\n <br>";
    }
  ?>


  </p>
</body>

</html>