<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題012</title>
</head>

<body>
  <p>12 「文字列を分けよう」</p>
  <p>
    <?php
      $v = "abcdefghijklmnopqrstuvwxyz";

      // 文字列を7文字ごとに分割する関数
      function splitStringByLength($string, $length) {
          $chunks = [];
          $str_length = strlen($string);
          for ($i = 0; $i < $str_length; $i += $length) {
              $chunks[] = substr($string, $i, $length);
          }
          return $chunks;
      }

      // 7文字ごとに分割
      $chunks = splitStringByLength($v, 7);

      // foreach文を使って分割された文字列を1行ずつ表示
      foreach ($chunks as $chunk) {
          echo $chunk . "\n <br>";
      }
    ?>


  </p>
</body>

</html>