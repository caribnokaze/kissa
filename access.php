<?php
  session_start();

  // if($f_taisaku == $_SESSION["taisaku"]) {

  //   unset($_SESSION["taisaku"]);

  // } else {
  //   echo "失敗";
  // }
?>

<head>
  <meta charset="UTF-8">
  <title>ACCESS | KISSA official website</title>
  <meta name="description" content="カフェ「KISSA」のアクセスマップと問い合わせフォームが掲載されたページです">
  <meta name="viewport" content="width=device-width">
  <script src="./js/toggle-menu.js"></script>
  <link href="./css/common.css" rel="stylesheet">
  <link href="./css/access.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  </head>

<body>
  <header class="header">
    <div class="header-inner">
      <a class="header-logo" href="./index.html">
        <img src="./images/common/logo-header.png" alt="KISSA">
      </a>
      <button class="toggle-menu-button"></button>
      <div class="header-site-menu">
        <nav class="site-menu">
          <ul>
            <li><a href="./concept.html">CONCEPT</a></li>
            <li><a href="./menu.html">MENU</a></li>
            <li><a href="./shop.html">SHOP</a></li>
            <li><a href="./access.php">ACCESS</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    <div class="title">
      <h1>ACCESS</h1>
      <p>アクセス・お問い合わせ</p>
    </div>
    <div class="map">
      <h2>アクセスマップ</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12953.337893523103!2d139.7013494!3d35.74258295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892b44fe39ce9%3A0x2816b413669ddd52!2z44CSMTczLTAwMzMg5p2x5Lqs6YO95p2_5qmL5Yy65aSn5bGx6KW_55S677yU77yT4oiS77yX!5e0!3m2!1sja!2sjp!4v1680871979649!5m2!1sja!2sjp"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact">
      <h2>お問い合わせフォーム</h2>
      <form action="confirm.php" method="post" id="myForm">
        <dl class="form-area">
          <dt><span class="required">お名前</span></dt>
          <dd><input class="input-text" type="text" name="name" required></dd>
          <dt><span class="required">メールアドレス</span></dt>
          <dd><input class="input-text" type="email" name="email" required></dd>
          <dt>電話番号</dt>
          <dd><input class="input-text" type="tel" name="tel"></dd>
          <dt>お問い合わせ種別</dt>
          <dd>
            <select class="select-box" name="genre">
              <option value="ご予約について" selected>ご予約について</option>
              <option value="メニューについて">メニューについて</option>
              <option value="営業時間について">営業時間について</option>
            </select>
          </dd>
          <dt>お客様について</dt>
          <dd>
            <label class="radio-button"><input type="radio" name="user-type" value="一般のお客様" checked>一般のお客様</label>
            <label class="radio-button"><input type="radio" name="user-type" value="お取引様">お取引様</label>
            <label class="radio-button"><input type="radio" name="user-type" value="その他">その他</label>
          </dd>
          <dt><span class="required">お問い合わせ内容</span></dt>
          <dd><textarea class="message" name="message" required></textarea></dd>
        </dl>
        <p class="confirm-text"><span>ご入力の上</span><span>【確認】ボタンを押してください</span></p>
        <button class="submit-button" type="submit" value="送信">確認</button>
      </form>
     </div>
  </main>

  <footer class="footer">
    <nav class="site-menu">
      <ul>
        <li><a href="./concept.html">CONCEPT</a></li>
        <li><a href="./menu.html">MENU</a></li>
        <li><a href="./shop.html">SHOP</a></li>
        <li><a href="./access.php">ACCESS</a></li>
      </ul>
    </nav>
    <a class="footer-logo" href="./index.html">
      <img src="./images/common/logo-footer.png" alt="KISSA">
    </a>
    <p class="footer-tel">TEL 01-2345-6789</p>
    <p class="footer-time">OPEN Fri-Sun 11:00-16:00</p>
    <p class="copyright"><small>&copy;Kissa</small></p>
  </footer>
  <?php var_dump($_SESSION);
  ?>
  <script>
    window.onload = function() {
    <?php
      if(isset($_SESSION['taisaku'])) {
        print ('alert("'.$_SESSION['taisaku'].'")');
        unset($_SESSION["taisaku"]);
      }
    ?>
    };
  </script>
</body>

</html>