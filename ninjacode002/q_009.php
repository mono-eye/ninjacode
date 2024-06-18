<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題009</title>
</head>

<body>
  <p>09 「URLを分解しよう」</p>
  <p>
  <?php
    $url = 'https://example.com/a/b/c.php?d=1&e=2#f';

    // URLを分解してクエリパラメータを取得
    $queryString = parse_url($url, PHP_URL_QUERY);

    // クエリパラメータを連想配列に変換
    parse_str($queryString, $params);

    // 期待される解答を出力
    foreach ($params as $key => $value) {
        echo "{$key}: {$value}\n <br> ";
    }
  ?>


  </p>
</body>

</html>