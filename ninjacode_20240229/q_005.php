<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題005</title>
</head>

<body>
  <p>5 文字列の1部を置き換えよう</p>
  <p>
    <?php
    $ninja = '人参CODE';
    
    $ninja = str_replace('人参', '忍者', $ninja);
    echo $ninja;
    ?>
  </p>


</body>

</html>