<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題009</title>
</head>

<body>
  <p>9 文字を配列にしてループしよう</p>
  <p>
    <?php
    $text = '{"text1":"忍者", "text2":"CODE", "text3":"無料問題集" }';

    // JSON文字列を配列に変換
    $array = json_decode($text, true);

    // 連想配列$textのキーと値を1つずつ順番に出力する
    foreach ($array as $key => $value) {
      echo "$key $value <br>";
    }

    ?>
  </p>


</body>

</html>