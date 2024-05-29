<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題015</title>
</head>

<body>
  <p>15 割り算をしよう</p>
  <p>
    <?php
    $score1 = 20;
    $score2 = 7;

    // 割り算
    $division_score = (int)($score1 / $score2);
    $remainder = $score1 % $score2;

    echo "商: $division_score, 余り: $remainder ";
   
    ?>
  </p>


</body>

</html>