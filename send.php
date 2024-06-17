<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Cafe dolce&calmato</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
  <header>
    <div class="header-logo">
      <a href="./index.php">
        <img src="images/cafe_logo.png" alt="Cafe Logo" class="logo-image">
      </a>
      <h1 id="page-top" class="font-1">Cafe dolce&calmato</h1>
    </div>
    <nav>
      <ul class="menu-bar">
        <li>
          <h2 class="font-2"><a href="#home">Home</a></h2>
        </li>
        <li>
          <h2 class="font-2"><a href="./#menu">Menu</a></h2>
        </li>
        <li>
          <h2 class="font-2"><a href="./TartOrder.php">Shop</a></h2>
        </li>
        <li>
          <h2 class="font-2"><a href="#contact">Contact</a></h2>
        </li>
      </ul>
    </nav>
  </header>

  <?php
  try {
    //DB名、ユーザー名、パスワードを変数に格納
    $dsn = 'mysql:dbname=tartorder;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';

    $PDO = new PDO($dsn, $user, $password); //PDOでMySQLのデータベースに接続
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示

    //TartOrder.phpの値を取得
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $mail_check = $_POST['mail_check'];
    $tel = $_POST['tel'];

    $yu_bin = $_POST['yu-bin'];
    $address = $_POST['address'];
    $tatemono = $_POST['tatemono'];

    $message = $_POST['message'];

    $Tart = "";
    $check_Box = $_POST['Tart'];
    $Tart = implode(', ', $check_Box);

    //echo $Tart;
    $sql = "INSERT INTO form (name, mail, mail_check, tel, yu_bin, address, tatemono, Tart, message) VALUES (:name, :mail, :mail_check, :tel, :yu_bin, :address, :tatemono, :Tart, :message)"; // テーブルに登録するINSERT INTO文を変数に格納　VALUESはプレースフォルダーで空の値を入れとく
    $stmt = $PDO->prepare($sql); //値が空のままSQL文をセット
    $params = array(':name' => $name, ':mail' => $mail, ':mail_check' => $mail_check, ':tel' => $tel, ':yu_bin' => $yu_bin, ':address' => $address, ':tatemono' => $tatemono, ':Tart' => $Tart, ':message' => $message); // 挿入する値を配列に格納
    $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
  }

  ?>

  <section id="about">
    <div class="backcolor">
      <h2>送信完了</h2>
      <p> 予約の送信が完了しました。<br>ホーム画面に戻ってください。</p>
    </div>
  </section>

  <section id="contact">
    <div class="backcolor">
      <h2>お問い合わせ</h2>
      <p>ご質問やご予約については、以下までご連絡ください。</p>
      <p>電話: 025-227-1121</p>
      <p>メール: ncc@nsg.gr.jp</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 おしゃれなカフェ</p>
  </footer>

  <!-- Jsファイル -->
  <script src="Cafe.js"></script>
</body>

</html>