<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題002</title>
</head>

<body>
  <p>2 1から15を表示させよう</p>
  <p>
    <?php
    foreach (range(1, 15) as $i) {
      echo $i . "<br>";
    }
    ?>
  </p>


</body>

</html>