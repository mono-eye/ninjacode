<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題007</title>
</head>

<body>
  <p>7 配列を一つひとつ表示しよう</p>
  <p>
    <?php
    $list = [
      "JavaScript",
      "Python",
      "PHP",
      "Ruby",
      "Perl"
    ];
    
    echo "<ul>";
    foreach ($list as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>
  </p>


</body>

</html>