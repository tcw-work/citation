<?php
//日本語設定を行う
mb_language("Japanese");
mb_internal_encoding("UTF-8");
$c_name=$_POST['c_name'];
$c_address=$_POST['c_address'];
$c_content=$_POST['c_content'];
//$mailsend=$_POST['mailsend'];

if(isset ($_POST['c_name']) or isset ($_POST['c_address']) or isset ($_POST['c_content'])) {
//$action = $_POST['action'];
$mail = "以下の内容が送信されました。\n\n";
$mail = "【お名前】\n";
$mail = $c_name."\n\n";
$mail = "【メールアドレス】\n";
$mail = $c_address."\n\n";
$mail = "【お問い合わせ内容】\n";
$mail = $c_content."\n\n";
    //    ↑これだと一番下のしか表示されない

    //    「.」連結を意味する
$mail = "以下の内容が送信されました。\n\n"."【お名前】\n".$c_name."\n\n"."【メールアドレス】\n".$c_address."\n\n"."【お問い合わせ内容】\n".$c_content."\n\n";

$mail_to = "m.tomizawa821@gmail.com";//送信先メールアドレス
    $mail_subject = "Citationメールフォーム\n".$c_name."より送信されました";//メールの件名
$mail_body = $mail;//メールの本文
$mail_header = "from:".$c_address;//フォームで入力されたメールアドレスを送信元として表示する

    //↓$returnPathは送信先からエラーなどがあった際に通知されるアドレス
$returnPath = '-f'.'m.tomizawa821@gmail.com';
$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header, $returnPath);
}


?>


<?php include('header.php');?>
<section class="citation result-top col-sm-12">
    <div class="citation-inner">
        <div class="citation-title">
            <h2><span>送信完了</span></h2>
        </div>

        <div class="result-block">
            <div class="result-block-inner col-sm-12">
                <p>
                    <span class="resuilt-in">
                        <?php
                        if($mailsend == true) {
                            echo '<p>メールを送信しました。</p>';
                            echo '<form method="post" action="contact.php">';
                            echo '<a href="/" class="result-input result-input-last">トップへ戻る</a>';
                            echo '</form>';
                        } else {
                            echo '<p>メール送信でエラーが発生しました。</p>';
                            echo '<form method="post" action="contact.php">';
                            echo '<input type="button" onclick="history.go(-2)" value="入力画面へ戻る">';
                            echo '</form>';
                        }
                        ?>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<?php include('side.php');?>
<?php include('footer.php');?>
