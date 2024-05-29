<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>問題001</title>
</head>

<body>
  <p>1 呼び出しから逆算してクラスを定義しよう</p>
  <p>
    <?php
    class NINJA {
    // プロパティの定義
    private $title;
    private $message;
    private $add;

    // コンストラクタ
    public function __construct($title, $add, $message) {
        $this->title = $title;
        $this->add = $add;
        $this->message = $message;
    }

    // renderメソッド
    public function render() {
      echo "<p>{$this->title}{$this->add}{$this->message}</p>";
    }
  }

    // クラスのインスタンス化とメソッド呼び出し
    $ninja = new NINJA('PHPの問題集','今から', 'スタート！');
    $ninja->render();


    ?>
  </p>


</body>

</html>