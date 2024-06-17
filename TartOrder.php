<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Cafe dolce&calmato</title>
  <link rel="stylesheet" href="css/styles.css">
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

  <section id="form">
    <div class="backcolor">
      <h2>タルトの注文</h2>
      <p> 私たちは当店自慢のタルトをご自宅に居ながらでも楽しめるように、タルトのみオンライン注文販売を行っています。<br>下記の注文フォームに必要事項を入力の上、送信して下さい。
      </p>
    </div>

    <h2 class="backcolor">タルト注文フォーム</h2>
    <div class="form-index">
      <form method="post" action="send.php" onSubmit="return check()">
        <h2>---連絡先情報---</h2>
        <div><b>氏名（必須入力・カタカナフルネーム・苗字と名前の間に空白推奨）</b></div>
        <input type="text" name="name" style="background-color:white" required><br>
        <div><b>メールアドレス（必須入力）</b></div>
        <input type="text" name="mail" style="background-color:white" required><br>
        <div><b>メールアドレス（必須入力・確認用）</b></div>
        <input type="text" name="mail_check" style="background-color:white" required><br>
        <div><b>電話番号(必須入力・例として000-1234-5678)</b></div>
        <input type="text" name="tel" style="background-color:white" required>
        <br>
        <h2>---住所---</h2>
        <div><b>郵便番号・ハイフンあり（必須入力・例として123-4567）</b></div>
        <input type="text" name="yu-bin" style="background-color:white" required>
        <div><b>都道府県・市区町村・番地（必須入力・例として新潟県〇〇市1-1-1）</b></div>
        <input type="text" required name="address" style="background-color:white">
        <div><b>建物名・部屋番号（自由入力）</b></div>
        <input type="text" name="tatemono" style="background-color:white" value="">
        <br><br>
        <p>
        <div><b>注文したいタルト(『必ず』一つ以上選んでください)</b></div>
        <input type="checkbox" name="Tart[]" value="フルーツタルト">
        フルーツタルト<br>
        <input type="checkbox" name="Tart[]" value="アップルタルト">
        アップルタルト<br>
        <input type="checkbox" name="Tart[]" value="ブルーベリータルト">
        ブルーベリータルト
        </p>
        <div><b>当店へのご要望などがあれば入力ください。ない場合は「無し」と入力して下さい。</b></div>
        <textarea name="message" style="background-color:white" required></textarea>
        <div>
          <input type="submit" class="form-btn" value="送信する">
        </div>
      </form>
      <script>
        function check() {
          // チェックボックスの要素を取得
          var checkboxes = document.getElementsByName("Tart[]");
          // 選択されたチェックボックスの数をカウント
          var checkedCount = 0;
          for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
              checkedCount++;
            }
          }
          // 最低1つ以上のチェックボックスが選択されているか確認
          if (checkedCount === 0) {
            alert('少なくとも一つのタルトを選択してください。');
            return false; // フォームの送信を中止
          } else {
            // フォームの送信を続行
            if (window.confirm('送信してよろしいですか？今一度、留意事項をご確認ください。')) { // 確認ダイアログを表示
              return true; // 「OK」時は送信を実行
            } else { // 「キャンセル」時の処理
              window.alert('キャンセルされました'); // 警告ダイアログを表示
              return false; // 送信を中止
            }

          }
        }
      </script>
    </div>
    <div class="form-index">
      <h2>---留意事項---</h2><br><br>
      <b>・フォーム送信後、入力されたメールアドレスに支払い方法などの詳細のメールをお送りします。代金の入金が確認が出来次第、タルト製造・発送を致します。</b>
      <br>
      <br>
      <b>・繫忙期などは、メールの返信・発送の送れることがあります。余裕を持ってご注文ください。また一時的にインターネット注文を停止する場合もございますので、X(Twitter)公式アカウントのチェックをお願いします。</b>
      <br>
      <br>
    </div>
  </section>
  <section id="contact">
    <div class=backcolor>
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