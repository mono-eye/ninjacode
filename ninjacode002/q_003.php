<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題003</title>
</head>

<body>
  <p>03 「配列の要素を削除しよう」</p>
  <p>
  <?php
    $list = ['A1', 'A2', 'A3', 'A4'];

    // 2つめの要素（インデックス1の要素）を削除
    unset($list[1]);

    // 配列のキーと値を表示
    foreach ($list as $key => $value) {
        echo "$key: $value\n" . " <br> ";
    }
  ?>
  </p>


</body>

</html>