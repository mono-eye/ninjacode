<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題015</title>
</head>

<body>
  <p>15 「時刻を求めよう」</p>
  <p>
    <?php
      // タイムゾーンを設定
      date_default_timezone_set("Asia/Tokyo");

      // 現在の日時を取得
      $current_time = new DateTime();

      // 2時間30分40秒後を追加
      $current_time->add(new DateInterval('PT2H30M40S'));

      // 結果をフォーマットして表示
      echo $current_time->format('Y-m-d H:i:s');
    ?>


  </p>
</body>

</html>