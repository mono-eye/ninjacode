<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題006</title>
</head>

<body>
  <p>
    <?php
    $text = ['P','H','P','を','学','ぶ'];
    
    // foreach($text as $texts) {
    //   var_dump($texts);
    // }
    foreach ($text as $texts) {
      //文字間に半角スペース
      echo $texts . ' ';
    }
    ?>
  </p>


</body>

</html>