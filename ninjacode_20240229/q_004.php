<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題004</title>
</head>

<body>
  <p>4 文字列の1部を取り出そう</p>
  <p>
    <?php
    $ninja = '忍者CODE';

    // mb_substr関数を使って文字列の一部を取得
    $part = mb_substr($ninja, 0, 2, 'UTF-8');

    echo $part;  // 出力: 忍者
    ?>
  </p>


</body>

</html>