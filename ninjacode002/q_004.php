<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題004</title>
</head>

<body>
  <p>04 「配列を逆転させよう」</p>
  <p>
  <?php
    $list = ['A1', 'C2', 'B4', 'D3'];

    // 2つめの要素（インデックス1の要素）を削除
    $reversed_list = array_reverse($list);

    // 配列のキーと値を表示
    foreach ($reversed_list as $key => $value) {
        echo "$key: $value\n" . " <br> ";
    }
  ?>
  </p>


</body>

</html>