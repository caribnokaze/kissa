<?php
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$genre = $_POST['genre'];
$user_type = $_POST['user-type'];
$message = $_POST['message'];
$message_disp = nl2br(htmlspecialchars($message));
?>

<!DOCTYPE html>
<html>

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
    <div class="contact">
      <h2>お問い合わせ内容</h2>
      <form action="contact.php" method="post">
        <dl class="form-area">
          <dt><span class="required">お名前</span></dt>
          <dd><span><?php print($name);?></span><input class="input-text" type="hidden" name="name" value ="<?php print($name)?>"></dd>
          <dt><span class="required">メールアドレス</span></dt>
          <dd><span><?php print($email);?></span><input class="input-text" type="hidden" name="email" value ="<?php print($email)?>"></dd>
          <dt>電話番号</dt>
          <dd><span><?php print($tel);?></span><input class="input-text" type="hidden" name="tel" value ="<?php print($tel)?>"></dd>
          <dt>お問い合わせ種別</dt>
          <dd>
            <span><?php print($genre);?></span>
            <input type="hidden" name="genre" value ="<?php print($genre)?>">
          </dd>
          <dt>お客様について</dt>
          <dd>

            <input type = "hidden" name = "user-type" value ="<?php print($user_type)?>">
            <span><?php print($user_type);?></span>
          </dd>
          <dt><span class="required">お問い合わせ内容</span></dt>
          <dd><input type = "hidden" name = "message" value ="<?php print($message)?>"><span><?php print(preg_replace("/\r?\n/", "<br />", htmlspecialchars($message)));?></span></dd>
        </dl>
        <p class="confirm-text"><span>ご入力内容がよろしければ</span><span>【送信】ボタンを押してください</span></p>
        <p class="button-area">
          <button class="return-button" type="button" onclick="window.history.back();">戻る</button>
          <button class="submit-button-send" type="submit" value="送信">送信</button>
        </p>
        </form>
        
</script>
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
</body>

</html>
