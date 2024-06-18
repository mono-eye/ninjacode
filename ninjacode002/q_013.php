<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題013</title>
</head>

<body>
  <p>13 「文字列を分けよう」</p>
  <p>
    <?php
      $s = "あいうえおかきくけこ";

      // 4文字目から4文字を抜き出す
      $substring = mb_substr($s, 3, 4);

      // 結果を表示
      echo $substring;
    ?>


  </p>
</body>

</html>