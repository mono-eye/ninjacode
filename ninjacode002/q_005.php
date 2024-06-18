<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題005</title>
</head>

<body>
  <p>05 「配列を再帰しよう」</p>
  <p>
    <?php
      $list = [1, 2, [3, [4, 5], 6, 7], 8, [9]];

      function is_numeric_recursive($list) {
          foreach ($list as $item) {
              if (is_array($item)) {
                  is_numeric_recursive($item);
              } elseif (is_numeric($item)) {
                  echo $item . "<br>\n";
              }
          }
      }

      // 再帰的に数値を含む配列を取得して表示
      is_numeric_recursive($list);
    ?>

  </p>
</body>

</html>