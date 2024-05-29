<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題003</title>
</head>

<body>
  <p>3 配列を繋げて「忍者CODE」を表示させよう</p>
  <p>
    <?php
    $list = ['忍','者','C','O','D','E'];
    // implode関数を使って配列の要素を結合
    $result = implode('', $list);

    // 結果を表示
    echo $result;
    ?>
  </p>


</body>

</html>