<?php
$action = $_POST['action'];
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$email = htmlspecialchars($_POST['email'],ENT_QUOTES);
$tel = htmlspecialchars($_POST['tel'],ENT_QUOTES);


$error = '';
if ($name == '') {
//    $error = $error.'<p>お名前が入力されていません。</p>';
}
if ($email == '') {
    $error = $error.'<p>メールアドレスが入力されていません。</p>';
}
if ($tel == '') {
    $error = $error.'<p>お電話番号が入力されていません。</p>';
}

if ($error != '') {
    echo $error;

    echo '<form method="post" action="form.html">';
    echo '<input type="submit" name="backbtn" value="前のページへ戻る">';
    echo '</form>';
} else {
    $mail .= "以下の内容が送信されました。\n\n";
    $mail .= "【お名前】\n";
    $mail .= $name."\n\n";
    $mail .= "【お名前フリガナ】\n";
    $mail .= $email."\n\n";
    $mail .= "【お電話番号】\n";
    $mail .= $tel."\n\n";

    //日本語設定を行う
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $mail_to    = "m.tomizawa821@gmail.com";          //送信先メールアドレス
    $mail_subject   = "メールフォームより送信されました";   //メールの件名
    $mail_body  = $mail;                //メールの本文
    $mail_header    = "from:".$email;           //フォームで入力されたメールアドレスを送信元として表示する

    $mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);

    if($mailsend == true) {
        echo '<p>メールを送信しました。</p>';
        echo '<form method="post" action="form.html">';
        echo '<input type="submit" name="backbtn" value="前のページへ戻る">';
        echo '</form>';
    } else {
        echo '<p>メール送信でエラーが発生しました。</p>';
        echo '<form method="post" action="form.html">';
        echo '<input type="submit" name="backbtn" value="前のページへ戻る">';
        echo '</form>';
    }
}

?>