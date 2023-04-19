<?php

// フォームデータを受け取る
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$genre = $_POST['genre'];
$user_type = $_POST['user-type'];
$message = $_POST['message'];

// メール送信のための設定
$to = 'caribbean.ocean.cafe@gmail.com';  // 送信先のメールアドレスを指定
$subject = 'お問い合わせ';  // 件名を指定
$headers = "From: $email\r\n" .
           "Reply-To: $email\r\n" .
           "Content-Type: text/plain; charset=utf-8\r\n" .
           "X-Mailer: PHP/" . phpversion();

// メールの本文を作成
$body = "～以下の内容でお問い合わせを受付しました～\n" .
        "\nお名前: $name\n" .
        "\nメールアドレス: $email\n" .
        "\n電話番号: $tel\n" .
        "\nお問い合わせ種別: $genre\n" .
        "\nお客様について: $user_type\n" .
        "\nお問い合わせ内容: \n$message\n" .
        "\n恐れ入りますが、返信までしばらくお待ちください。\n■カフェKISSA■";

// メール送信
if (mail($to, $subject, $body, $headers)) {
  mail($email, $subject, $body, $headers);
  $_POST['name'] = '';
  $_POST['email'] = '';
  $_POST['tel'] = '';
  $_POST['genre'] = 'ご予約について';
  $_POST['user_type'] = '一般のお客様';
  $_POST['message'] = '';
  //セッション管理の設定
session_start();
$_SESSION["taisaku"] = "お問い合わせが完了しました";
  header("Location:https://itsumogenki.biz/kissa/access.php");
  exit;
} else {
  echo "送信が失敗しました。";
}
?>


