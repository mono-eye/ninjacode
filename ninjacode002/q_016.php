<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題016</title>
</head>

<body>
  <p>16 「うるう年を求めよう」</p>
  <p>
    <?php
      // 年の配列
      $years = [1900, 2000, 2020, 2022];

      // うるう年かどうかを判定する関数
      function is_leap_year($year) {
      // うるう年の判定条件
      return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
      }

      // うるう年のみを取得
      $leap_years = array_filter($years, 'is_leap_year');
      
      // 結果を表示
      foreach ($leap_years as $leap_year) {
        echo $leap_year . "<br>";
      }
    ?>


  </p>
</body>

</html>