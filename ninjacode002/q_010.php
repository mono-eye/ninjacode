<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題010</title>
</head>

<body>
  <p>10 「Pathを分解しよう」</p>
  <p>
  <?php
      $path = '/var/www/html/example.com/index.html';

      // パスをディレクトリごとに分割
      $path_parts = explode('/', $path);

      // 3階層目に'test'ディレクトリを挿入
      // インデックス番号で指定、要素数を確認
      if (count($path_parts) >= 4) {
          $path_parts[3] = 'test/' . $path_parts[3];
      }

      // 再度パスを文字列に結合
      $new_path = implode('/', $path_parts);

      echo $new_path;
  ?>


  </p>
</body>

</html>