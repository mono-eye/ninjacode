<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題008</title>
</head>

<body>
  <p>08 「配列を合体させよう」</p>
  <p>
  <?php
    $list1 = [1, "a", "3" => "b", "c" => 2];
    $list2 = [-1, 0, "3" => "d", "c" => 1];

    // 配列をマージする
    $merged = array_merge($list1, $list2);
    // 配列を改行して出力する
    echo "<pre>";
    // 重複するキーの値は後から来たものが優先、後の配列の値が残る
    print_r($merged);
    echo "</pre>";
  ?>


  </p>
</body>

</html>