<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題008</title>
</head>

<body>
  <p>8 変数の足し算をしよう</p>
  <p>
    <?php
    $n1 = 1;
    $n2 = "忍者2";
    $n3 = [1029,480,3,493];

    //$n1 = 1;は整数
    // 文字列 $n2 から数値部分を取り出す（数字以外のすべての文字を取り除く）
    $n2_numer = (int) filter_var($n2, FILTER_SANITIZE_NUMBER_INT);
    //$n3 = 3;
    // 配列から整数3のみを選び出す
    $threes_only = array_filter($n3, function($num) {
      return $num === 3;
    });
    // すべての値を合計する
    $total = $n1 + $n2_numer + array_sum($threes_only);

    echo $total;

    ?>
  </p>


</body>

</html>