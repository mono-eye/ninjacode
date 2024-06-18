<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題017</title>
</head>

<body>
  <p>17 「文字を日時に変換しよう」</p>
  <p>
    <?php
      // 現在の日時を取得
      $today = date('Y-m-d');

      // 来週の火曜日の日付を取得
      $nextTuesday = date('Y-m-d', strtotime('next Tuesday', strtotime($today)));

      // 日付を画面に表示
      echo "来週の火曜日は: " . $nextTuesday;
    ?>


  </p>
</body>

</html>