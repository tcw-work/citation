<section class="citation contact col-sm-12">
    <div id="contact-id" class="citation-inner">
        <div class="citation-title contact-title">
            <h2><span>お問い合わせフォーム</span></h2>
        </div>


        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
<!--                <form action="contact-result.php" method="post" enctype="multipart/form-data">-->
                <form action="contact-confirm.php" method="post" enctype="multipart/form-data">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" id="c_name" name="c_name" placeholder="名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※必須
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" id="c_address" name="c_address" placeholder="メールアドレス">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※必須
                        </div>
                    </div>
                    
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
<!--                            <input type="text" name="c_content" placeholder="お問い合わせ内容">-->
                            <textarea class="input" id="c_content" name="c_content" rows="7" placeholder="お問い合わせ内容"></textarea>
                            
                            
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※必須
                        </div>
                    </div>


<!--                    <input type="radio" name="media" checked="checked" value="1" style="display:none;">-->

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「送信」ボタンを押してください。</p>
                        </div>
                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="送信" class="result-input">
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </section>
    </div>

</section>



