<?php
$c_name=$_POST['c_name'];
$c_address=$_POST['c_address'];
$c_content=$_POST['c_content'];
//$c-content=$_POST['auther'];


$c_name = htmlspecialchars($c_name);
$c_address= htmlspecialchars($c_address);
//                 ↓サニタイジングと変数の格納を同時に行ってもよい
$c_content = htmlspecialchars($_POST['c_content'],ENT_QUOTES);

if(empty ($_POST['c_name'])) {
    $c_name = '<span class="caution">お名前が入力されていません。</span>';
}
if(empty ($_POST['c_address'])) {
    $c_address = '<span class="caution">メールアドレスが入力されていません。</span>';
}
if(empty ($_POST['c_content'])) {
    $c_content = '<span class="caution">お問い合わせ内容が入力されていません。</span>';
}
?>



<?php include('header.php');?>
<section class="citation contact-top result-top col-sm-12">
    <div class="citation-inner">
        <div class="citation-title">
            <h2><span>確認画面</span></h2>
        </div>
        <div class="result-block contact-block">
            <form action="contact-last.php" method="post" enctype="multipart/form-data">
                <div class="result-block-inner contact-block-inner col-sm-12">
                    <ul>
                        <li><span class="contact-left">※お名前</span><br>
                            <span class="contact-right"><?php print $c_name;?></span></li>
                        <li><span class="contact-left">※メールアドレス</span><br>
                            <span class="contact-right"><?php print $c_address?></span></li>
                        <li><span class="contact-left">※お問い合わせ内容</span><br>
                            <span class="contact-right"><?php print $c_content;?></span></li>
                    </ul>

                    <input type="button" onclick="history.back()" value="戻る">
                    <input type="button" onclick="submit();" value="送信" class="result-input">
                    
<!--                    ↓送信用のデータを変数で格納-->
                    <input type="hidden" value="'.$c_name.'" name="c_name"/>
                    <input type="hidden" value="'.$c_address.'" name="c_address"/>
                    <input type="hidden" value="'.$c_content.'" name="c_content"/>
                    
                </div>
            </form>
        </div>
    </div>
</section>
<?php include('side.php');?>
<?php include('footer.php');?>