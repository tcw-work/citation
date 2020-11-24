<?php
//日本語設定を行う
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$c_name=$_POST['c_name'];
$c_address=$_POST['c_address'];
$c_content=$_POST['c_content'];

//$action = $_POST['action'];
$mail = "以下の内容が送信されました。\n\n";
$mail = "【お名前】\n";
$mail = $c_name."\n\n";
$mail = "【メールアドレス】\n";
$mail = $c_address."\n\n";
$mail = "【お問い合わせ内容】\n";
$mail = $c_content."\n\n";

$mail_to    = "m.tomizawa821@gmail.com";          //送信先メールアドレス
$mail_subject   = "メールフォームより送信されました";   //メールの件名
$mail_body  = $mail;                //メールの本文
$mail_header    = "from:".$c_address;           //フォームで入力されたメールアドレスを送信元として表示する

$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);

if($mailsend == true) {
    echo '<p>メールを送信しました。</p>';
    echo '<form method="post" action="contact.php">';
    echo '<input type="submit" name="backbtn" value="前のページへ戻る">';
    echo '</form>';
} else {
    echo '<p>メール送信でエラーが発生しました。</p>';
    echo '<form method="post" action="contact.php">';
    echo '<input type="submit" name="backbtn" value="前のページへ戻る">';
    echo '</form>';
}
?>




<!--
<//?php
$to = "m.tomizawa821@gmail.com"; 
$subject = "TEST MAIL";
$message = "Hello!rnThis is TEST MAIL.";
$headers = "From: m.tomizawa821@gmail.com";

mail($to, $subject, $message, $headers);
?>-->
