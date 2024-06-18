<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題011</title>
</head>

<body>
  <p>11 「正規表現を知ろう」</p>
  <p>
    <?php
        $html = '<img src="a.jpg" /><img src="b.jpg" /><img src="c.jpg" />';

        // 正規表現でsrc属性の値を抽出する
        $pattern = '/<img[^>]+src="([^"]+)"/';

        // マッチ結果を配列で格納
        $matches = [];

        // 正規表現でマッチする文字列を全て抽出
        preg_match_all($pattern, $html, $matches);

        // マッチした画像のURLを取得
        $image_urls = $matches[1];

        // 結果を出力
        foreach ($image_urls as $url) {
            echo $url . "\n <br>";
        }
    ?>


  </p>
</body>

</html>