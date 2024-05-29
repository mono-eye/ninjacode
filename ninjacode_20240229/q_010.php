<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題010</title>
</head>

<body>
  <p>10 配列から文字列を組み立てよう</p>
  <p>
    <?php
    $list = [
      1 => '忍者',
      2 => ['CO', 'DE'],
      3 => '{"text1":"無", "text2":"料"}',
      4 => [
        401 => '集',
        402 => '人参',
        403 => '問題',
      ],
    ];

    // 2の要素を結合して「CODE」にする
    $code = $list[2][0] . $list[2][1];

    // 4の要素から「問題集」を取り出す
    $problembook = $list[4][403] . $list[4][401];

    // 「忍者CODE問題集」を作成する
    $result = $list[1] . $code . $problembook;

    echo "<ul>";
    echo "<li>" . $result . "</li>";
    echo "</ul>";
    ?>
  </p>


</body>

</html>