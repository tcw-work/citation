<section class="citation col-sm-12">
    <div id="book01" class="citation-inner">
        <div class="citation-title">
            <h2><span>本・雑誌から出典（10パターン）</span></h2>
        </div>
        <div class="citatoin-head citatoin-head-ac" id="book01-1">
            <div class="citatoin-head-inner">
                <h3 class="citation-small-title">作者が一人の場合</h3>
                <p class="citation-example">例&#058; 山崎康太 (1989). 学校現場の教本 みなみ出版</p>
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
                <p class="citation-example">例&#058; 佐々木綾子・樋口裕也・田島信也 (2001) 『世界の不思議スポット』大取出版</p>
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
                <p class="citation-example">例&#058; トーマス, K（1988）『地中海の発展と人々の生活』（大崎輝・島田幸喜訳）国見出版</p>
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
                <p class="citation-example">例&#058; 松本由美 (2010)「日本神話に関する考察」『古事記から読み解く論文集』 pp. 101-129. 大取出版</p>
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
                <p class="citation-example">例&#058; 堂本輝 (1999)「日本心理学の研究論文集」
                    松崎加奈子編『日本文化と心理学』みこし社</p>
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



