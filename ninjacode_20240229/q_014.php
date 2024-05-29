<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題014</title>
</head>

<body>
  <p>14 単位をそろえよう</p>
  <p>
    <?php
    $score1 = 1024;
    $score2 = 512;

    // MB単位で加算
    $total_score = $score1 + $score2;
    // GB単位に変換して表示
    $total = $total_score / 1024;
    echo $total . "GB" ;
    ?>
  </p>


</body>

</html>