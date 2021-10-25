<?php
$c_name=$_POST['c_name'];
$c_address=$_POST['c_address'];
//$c_content=$_POST['c_content'];
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$c_name = htmlspecialchars($c_name);
$c_name_emp = "";
$c_address= htmlspecialchars($c_address);
$c_address_emp = "";
//                 ↓サニタイジングと変数の格納を同時に行ってもよい
$c_content = htmlspecialchars($_POST['c_content'],ENT_QUOTES);
$c_content_emp = "";

if(empty ($_POST['c_name'])) {
    $c_name = '';
    $c_name_emp = '<span class="caution">お名前が入力されていません。</span>';
}
if(empty ($_POST['c_address'])) {
    $c_address = '';
    $c_address_emp = '<span class="caution">お名前が入力されていません。</span>';
}
if(empty ($_POST['c_content'])) {
    $c_content = '';
    $c_content_emp = '<span class="caution">お問い合わせ内容が入力されていません。</span>';
}
if(empty ($_POST['c_name']) or empty ($_POST['c_address']) or empty ($_POST['c_content'])) {
//    $submit =
}

//if (isset($_POST["submit"])) {
//    //$action = $_POST['action'];
//    $mail = "以下の内容が送信されました。\n\n";
//    $mail = "【お名前】\n";
//    $mail = $c_name."\n\n";
//    $mail = "【メールアドレス】\n";
//    $mail = $c_address."\n\n";
//    $mail = "【お問い合わせ内容】\n";
//    $mail = $c_content."\n\n";
//
//    $mail_to = "m.tomizawa821@gmail.com";//送信先メールアドレス
//    $mail_subject = "メールフォームより送信されました";//メールの件名
//    $mail_body = $mail;//メールの本文
//    $mail_header = "from:".$c_address;//フォームで入力されたメールアドレスを送信元として表示する
//
//    //↓送信先からエラーなどがあった際に通知されるアドレス
//    $returnPath = '-f'.'m.tomizawa821@gmail.com';
//    $mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header, $returnPath);
//}
?>

<?php include('header.php');?>
<section class="citation contact-top result-top col-sm-12">
    <div class="citation-inner">
        <div class="citation-title">
            <h2><span>確認画面</span></h2>
        </div>
        <div class="result-block contact-block">
            <form action="contact-last.php" method="post">
                <div class="result-block-inner contact-block-inner col-sm-12">
                    <ul>
                        <li><span class="contact-left">※お名前</span><br>
                            <span class="contact-right"><?php print $c_name;?><?php print $c_name_emp;?></span></li>
                        <li><span class="contact-left">※メールアドレス</span><br>
                            <span class="contact-right"><?php print $c_address?><?php print $c_address_emp;?></span></li>
                        <li><span class="contact-left">※お問い合わせ内容</span><br>
                            <span class="contact-right"><?php print $c_content;?><?php print $c_content_emp;?></span></li>
                    </ul>
                    <!--                    ↓送信用のデータを変数で格納-->
                    <input type="hidden" value="<?php echo $c_name; ?>" name="c_name"/>
                    <input type="hidden" value="<?php echo $c_address; ?>" name="c_address"/>
                    <input type="hidden" value="<?php echo $c_content; ?>" name="c_content"/>
                    <input type="button" onclick="history.back()" value="戻る" class="result-input result-input01">
                    <input type="button" onclick="submit();" value="送信" class="result-input" name="sub">
                    
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('side.php');?>
<?php include('footer.php');?>