<section class="citation col-sm-12">
    <div id="book01" class="citation-inner">
        <div class="citation-title">
            <h2><span>本・雑誌から出典（10パターン）</span></h2>
        </div>
        <div class="citatoin-head citatoin-head-ac" id="book01-1">
            <div class="citatoin-head-inner">
                <h3 class="citation-small-title">作者が一人の場合</h3>
                <p class="citation-example">例&#058; 岡本大樹 (1997). 中年からのアイデンティティ あおぞら出版</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="auther" placeholder="作者の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="発行日（例:1972/12/31）">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="本の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="publisher" placeholder="出版社">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="1" style="display:none;">

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



    <div class="citation-inner">
        <div class="citatoin-head">
            <div class="citatoin-head-inner" id="book01-2">
                <h3 class="citation-small-title">作者が複数人いる場合</h3>
                <p class="citation-example">例&#058; 井出祥子・荻野綱男・川﨑晶子・生田少子 (1986) 『日本とアメリカ人の敬語行動 ― 大学生の場合』南雲堂</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left maltiple-area col-sm-5">
                            <input type="text" name="auther" class="maltiple-auther" placeholder="作者の名前01">
                            <input type="text" name="auther02" class="maltiple-auther" placeholder="作者の名前02">
                            <input type="text" name="auther03" class="maltiple-auther" placeholder="作者の名前03">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="発行日（例:1972/12/31）">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="本の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="publisher" placeholder="出版社">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="1-2" style="display:none;">

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



    <div class="citation-inner">
        <div class="citatoin-head">
            <div class="citatoin-head-inner" id="book01-3">
                <h3 class="citation-small-title">外国人作者・翻訳の場合</h3>
                <p class="citation-example">例&#058; ゴッフマン, E（1986）『儀礼としての相互行為―対面行動
                    の社会学』（広瀬英彦・安江孝司訳）法政大学出版局</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="auther" placeholder="作者の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="発行日（例:1972/12/31）">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="本の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="translator" placeholder="翻訳者の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="publisher" placeholder="出版社">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※必須項目
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="1-3" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>

                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="citation-inner">
        <div class="citatoin-head">
            <div class="citatoin-head-inner" id="book01-4">
                <h3 class="citation-small-title">論文から出典</h3>
                <p class="citation-example">例&#058; 寺村秀夫 (1993)「表現の比較」について」『寺村秀夫論文集 II ― 言語学・日本語教育編』 pp. 185-212. くろしお出版</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="auther" placeholder="作者の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="発行日（例:1972/12/31）">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="論文の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="publisher" placeholder="出版社">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="thesis" placeholder="論文がかかれた書籍名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="page" placeholder="ページ番号(数字のみ)">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="1-4" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>

                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>



    <div class="citation-inner">
        <div class="citatoin-head">
            <div class="citatoin-head-inner" id="book01-5">
                <h3 class="citation-small-title">本に掲載された論文の場合</h3>
                <p class="citation-example">例&#058; 吉岡潤 (2007)「多民族国家からポーランド人国家へ」
                    渡辺克義編『ポーランド学を学ぶ人のために』世界思想社</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="auther" placeholder="作者の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="editor" placeholder="編者名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="発行日（例:1972/12/31）">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="thesis" placeholder="論文名">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="論文が記載された本の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="page" placeholder="ページ番号① (数字のみ)">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>


                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="page_02" placeholder="ページ番号② (数字のみ)">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※2ページ以上の場合のみように入れてください
                        </div>
                    </div>


                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="publisher" placeholder="出版社">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合は記載されません。
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="1-5" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>

                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>



<!--
    <div class="citation-inner">
        <div class="citatoin-head">
            <div class="citatoin-head-inner" id="book01-6">
                <h3 class="citation-small-title">自分の文章に引用を出典</h3>
                <p class="citation-example">例&#058; (「武蔵御岳山はかつて修験道の霊山であった」
                    (山田たかし 1999,102-103))</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result.php">
                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="auther" placeholder="作者の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※未入力の場合は、本の名前が先頭に来ます
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="date" placeholder="発行日（例:1972/12/31）">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※空欄の場合（発行日不明）と記載されます。
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="name" placeholder="本の名前">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※必須項目
                        </div>
                    </div>

                    <div class="citation-block-ex">
                        <div class="cbi-left col-sm-5">
                            <input type="text" name="publisher" placeholder="出版社">
                        </div>
                        <div class="cbi-right col-sm-7">
                            ※必須項目
                        </div>
                    </div>

                    <input type="radio" name="media" checked="checked" value="1-6" style="display:none;">

                    <div class="citation-block-ex">
                        <div class="resulting">
                            <p>※上記で間違いなければ、「結果を見る」ボタンを押してください。</p>
                        </div>

                        <div class="citation-btn">
                            <button type="button" class="btn btn-warning">
                                <input type="button" onclick="submit();" value="結果を見る">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
-->
</section>



