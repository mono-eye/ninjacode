<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題017</title>
</head>

<body>
  <p>17 平面をイメージしよう</p>
  <p>
    <?php
    $moves = [
      // 南もどるー
      'south' => 4,
      // 東進む＋
      'east' => 6,
      // 北進む＋
      'north' => 5,
      // 西もどるー
      'west' => 8
    ];

    //出発点
    $east_west_position = 0;
    $north_south_position = 0;

    // 南の移動ー
    $north_south_position -= $moves['south'];
    // 北の移動＋
    $north_south_position += $moves['north'];
    // 東の移動＋
    $east_west_position += $moves['east'];
    // 西の移動ー
    $east_west_position -= $moves['west'];

    // 結果を表示
    if ($east_west_position > 0) {
        echo "東に" . abs($east_west_position) . "km、\n";
    } elseif ($east_west_position < 0) {
        echo "西に" . abs($east_west_position) . "km、\n";
    } else {
        echo "東西方向の移動なし、\n";
    }

    if ($north_south_position > 0) {
        echo "北に" . abs($north_south_position) . "kmです。\n";
    } elseif ($north_south_position < 0) {
        echo "南に" . abs($north_south_position) . "kmです。\n";
    } else {
        echo "南北方向の移動なしです。\n";
    }

    ?>
  </p>


</body>

</html>