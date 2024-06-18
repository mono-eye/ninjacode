<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題014</title>
</head>

<body>
  <p>14 「CSVを処理しよう」</p>
  <p>
    <?php
      $csv = '1,02,a,"b","c,d,e","f""g"';

      // CSV文字列を分割
      $fields = str_getcsv($csv);
      
      // 各項目を表示
      foreach ($fields as $field) {
          echo $field . "\n <br>";
      }
    ?>


  </p>
</body>

</html>