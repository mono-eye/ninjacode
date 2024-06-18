<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題007</title>
</head>

<body>
  <p>07 「連想配列を操作しよう」</p>
  <p>
    <?php
      $list[] = ['name' => 'A', 'test' => [10, 3, 5]];
      $list[] = ['name' => 'B', 'test' => [7, 9]];
      $list[] = ['name' => 'C', 'test' => []];
      $list[] = ['name' => 'D', 'test' => ""];
      $list[] = ['name' => 'E', 'test' => [7]];
      $list[] = ['name' => 'F', 'hoge' => []];
      
      // 平均点を計算する関数
      function calculateAverage($tests) {
          // テストが空もしくは空文字列の場合、平均点は0とする
          if (empty($tests) || $tests === "") {
              return 0;
          }
      
          // テストが配列であれば平均を計算する
          if (is_array($tests)) {
              $count = count($tests);
              $sum = array_sum($tests);
              return $sum / $count;
          }
      
          return 0; // それ以外の場合も平均点は0とする
      }
      
      // 平均点の計算とソート
      usort($list, function($a, $b) {
          // 'test' キーが存在しない場合は空配列として扱う
          $testsA = isset($a['test']) ? $a['test'] : [];
          $testsB = isset($b['test']) ? $b['test'] : [];
      
          $averageA = calculateAverage($testsA);
          $averageB = calculateAverage($testsB);
      
          // 平均点の降順にソートする
          return $averageB - $averageA;
      });
      
      // 結果の出力
      foreach ($list as $item) {
          // 'test' キーが存在しない場合は空配列として扱う
          $tests = isset($item['test']) ? $item['test'] : [];
          $average = calculateAverage($tests);
          echo "{$item['name']}: {$average}\n <br>";
      }
      
    ?>

  </p>
</body>

</html>