<?php include('header.php');?>
<section class="citation result-top col-sm-12">
    <div class="citation-inner">
        <div class="citation-title">
            <h2><span>検索結果</span></h2>
        </div>
<!--            編集領域-->
       <div class="result-block">
           <div class="result-block-inner col-sm-12">
               <p>
               <span class="result-icon"><img src="img/side_icon01.png" alt=""></span>
               <span class="resuilt-in"><?php include('book-result.php');?></span></p>
               <input type="button" onclick="history.back()" value="戻る">
           </div>
       </div>
<!--            編集領域-->
    </div>
</section>
<?php include('book.php');?>
<?php include('lead.php');?>
<?php include('side.php');?>
<?php include('footer.php');?>








