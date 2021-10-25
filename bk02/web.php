<section class="citation col-sm-12">
    <div class="citation-inner">
        <div class="citation-title">
            <h2><span>Webサイトから引用（10パターン）</span></h2>
        </div>
        <div class="citatoin-head citatoin-head-ac" id="web01-1">
            <div class="citatoin-head-inner">
                <h3 class="citation-small-title">Webサイト（全体）を出典</h3>
                <p class="citation-example">例&#058; 岡本信二 (2001). 「日本文学研究サイト」. http://test-test.com/2007.html, (閲覧日: 2020 年 1 月 12 日)
                </p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_02.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="auther" placeholder="著書名・組織名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、サイト名が先頭に来ます
                        </div>
                    </div>
                    
                    <div class="citation-block-ex" style="display:none">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="p_title" placeholder="ページのタイトル">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="投稿日">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は（発行年不明）が入ります。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="Webサイトの名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="url" placeholder="URL">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>
                    
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="access" placeholder="最後にアクセスした日付">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="2" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>
                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る" class="result-input">
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </section>
    </div>
    
   
    <div id="book01" class="citation-inner">
        <div class="citatoin-head citatoin-head" id="web01-2">
            <div class="citatoin-head-inner">
                <h3 class="citation-small-title">サイト内の記事・論文を出典</h3>
                <p class="citation-example">例&#058; 高橋奈美 (2010). 『日本文学の始まり』「日本文学研究サイト」. http://test-test.com/2009.html, (閲覧日: 2021 年 12 月 11 日)
                </p>
            </div>
        </div>
       
        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_02.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="auther" placeholder="著書名・組織名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、サイト名が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="投稿日/更新日">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は（発行年不明）が入ります。
                        </div>
                    </div>
                    
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="p_title" placeholder="ページ、資料の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="サイトの名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="url" placeholder="URL">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="access" placeholder="最後にアクセスした日付">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="2-1" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>
                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る" class="result-input">
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </section>
    </div>
    
    
    
    <div id="book01" class="citation-inner">
        <div class="citatoin-head citatoin-head" id="web01-3">
            <div class="citatoin-head-inner">
                <h3 class="citation-small-title">作者が複数の記事・論文を出典</h3>
                <p class="citation-example">例&#058; 神崎誠・岡本信二・高橋奈美 (2010). 『二ホン最古の文学』「日本文学研究サイト」. http://test-test.com/2008.html, (閲覧日: 2021 年 11 月 31 日)
                </p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_02.php">
                    
                    <div class="citation-block-ex">
                        <div class="cbi-left maltiple-area col-sm-5">
                            <input type="text" name="auther" class="maltiple-auther" placeholder="作者の名前01">
                            <input type="text" name="auther02" class="maltiple-auther" placeholder="作者の名前02（複数の場合のみ記入）">
                            <input type="text" name="auther03" class="maltiple-auther" placeholder="作者の名前03（複数の場合のみ記入）">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※作者名が一人の場合は「01」にのみ入れてください<br>
                            ※作者名が未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="投稿日/更新日">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は（発行年不明）が入ります。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="p_title" placeholder="ページ、資料の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="サイトの名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="url" placeholder="URL">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="access" placeholder="最後にアクセスした日付">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="2-2" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>
                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る" class="result-input">
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </section>
    </div>

   
    <div id="book01" class="citation-inner">
        <div class="citatoin-head citatoin-head" id="web01-4">
            <div class="citatoin-head-inner">
                <h3 class="citation-small-title">オンラインジャーナルを出典</h3>
                <p class="citation-example">例&#058; 落合隆 (2009). 『平成の文学に関する論文』. 日学文オンラインジャーナル. 「日本文学研究サイト」. vol. 12(巻数). no. 3(号数) .p.101-102. http://test-test.com/2010.html, (閲覧日: 2021 年 12 月 21 日)
                </p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_02_02.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left maltiple-area col-sm-5">
                            <input type="text" name="auther" placeholder="著書名・組織名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※作者名が一人の場合は「01」にのみ入れてください
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="投稿日/更新日">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は（発行年不明）が入ります。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="p_title" placeholder="論文名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>
                    
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="a_title" placeholder="誌名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="サイトの名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="volume" placeholder="巻数">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="issue" placeholder="号数">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>
                    
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="page_start" placeholder="初めのページ">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は終わりのページのみ記載されます。
                        </div>
                    </div>
                    
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="page_end" placeholder="終わりのページ">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は始めのページのみ記載されます。
                        </div>
                    </div>
                   
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="url" placeholder="URL">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="access" placeholder="最後にアクセスした日付">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="2-3" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>
                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る" class="result-input">
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </section>
    </div>
</section>