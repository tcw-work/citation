<section class="citation col-sm-12">
    <div class="citation-inner">
        <div class="citation-title">
            <h2><span>Webサイトから引用（10パターン）</span></h2>
        </div>
        <div class="citatoin-head citatoin-head-ac" id="web01-1">
            <div class="citatoin-head-inner">
                <h3 class="citation-small-title">Webサイト（全体）を出典</h3>
                <p class="citation-example">例&#058; 内田樹 (2010)「エクリチュールについて」, http://blog.tatsuru.com/2010/11/05_1132.php (閲覧日: 2013 年 6 月 3 日)</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_web.php">
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
                <p class="citation-example">例&#058; 内田樹 (2010)『エクリチュールについて』「内田樹の研究室」. http://blog.tatsuru.com/2010/11/05_1132.php (閲覧日: 2013 年 6 月 3 日)</p>
            </div>
        </div>
       
        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_web.php">
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
                <p class="citation-example">例&#058; 内田樹 (2010)『エクリチュールについて』「内田樹の研究室」. http://blog.tatsuru.com/2010/11/05_1132.php (閲覧日: 2013 年 6 月 3 日)</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_web.php">
                    
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
                <p class="citation-example">例&#058; 内田樹 (2010)『エクリチュールについて』「内田樹の研究室」. http://blog.tatsuru.com/2010/11/05_1132.php (閲覧日: 2013 年 6 月 3 日)</p>
            </div>
        </div>

        <section class="citation-block">
            <div class="citation-block-inner col-sm-12">
                <form method="post" action="result_web_journal.php">
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



<!--

Webサイトから入手した文献を引用する場合
Webサイトから入手した文献やPDFを引用する場合には、文献名と該当URLを併記します。参照した部分をわかりやすくするためにも、文献名のあとに版表示を記載しましょう。

【Webサイトから入手した文献やPDFを引用する場合の記載項目】
著者名. 文献名. 版表示, 出版年, 入手先URL, （入手日付）

例
環境庁編. 環境白書・循環型社会白書. 平成20年版, 2008. http://www.env.go.jp/policy/hakusyo/h20/index.html, (参照 2010-03-18)

●出典https://u-note.me/note/47488449#post-index-5


インターネットのWebサイトの場合

サイト名. (情報の出された年). ページ名, Retrieved 取得年月日, from URL
Tanya Reinhart. (n.d.). Personal pages of Tanya Reinhart, Retrieved June 17, 2011, from http://www.let.uu.nl/~tanya.reinhart/personal/

上記例の n.d. は nodate の略で、サイトの情報がいつ作成されたのか分からない場合に用いる
【注意】Webサイトに掲載されている情報のうち、すでに紙媒体（論文誌や白書など）で刊行されているものについてはそちらを優先してください。

●出典http://navi.pep-rg.jp/pep-common/citation



ウェブページで情報じょうほうが不足ふそくしている場合ばあいの書かき方かた
「今後の社会資本政策に関するインターネット・アンケート調査」, <http://sociosys.mri.co.jp/enquete/031215.html> 2005年５月９日アクセス.
    内山和也（発行年不明）「日本人の依頼行為における順序構造について」, [online]homepage3.nifty.com/recipe_okiba/nifongo/irai.html（参照2007-1-1）.
    "はじめてのウェブログ [weblog for beginners]", <http://kotonoha.main.jp/weblog/> 2006年６月29日アクセス.

    著者名ちょしゃめいが不明ふめいまたは匿名とくめいの場合ばあいはタイトルから書かく（発行年はっこうねんは省略しょうりゃくしてよい。発行年はっこうねんを省略しょうりゃくしないときは「著者不明」とする）
    著者名ちょしゃめいはわかるが、発行年はっこうねんがわからない場合ばあいには、「（発行年不明）」と書かく
    テキストのタイトルが不明ふめいの場合ばあいは、サイト名めいまたはページのタイトルを書かく
    サイト名めいやページのタイトルを書かく場合ばあいは、ダブルクォーテーション（" "）でくくる


    PDFなどの場合ばあいの書かき方かた
    山下清美・川浦康至・川上善郎（2000）「WEB日記の内容と文体の特徴」（CmCC研究会第3回シンポジウム発表資料）, [online]kujira.psy.senshu-u.ac.jp/~Eyamasita/works/CmCC3.pdf（参照2003-１-３）.
    太宰治（2000）「グッド・バイ」<http://www.aozora.gr.jp/cards/000035/files/258.ebk> 2002年４月９日アクセス.

    書籍しょせきや論文ろんぶんの場合ばあいと同おなじように書かく
    テキストに発行年はっこうねんが記しるされている場合ばあいは、それに従したがう
    発行年はっこうねんが記しるされていない場合ばあいは、ファイルの最終修正日さいしゅうしゅうせいびを発行年はっこうねんとしてよい
    タイトルはカギカッコ（「」）でくくる
    入手先にゅうしゅさきのURLを書かく

    ●出典http://www7a.biglobe.ne.jp/nifongo/ron/ron_04.html#web_a




    SIST 科学技術情報流通技術基準
    http://sti.jst.go.jp/sist/index.html (5 月 20 日最終閲覧)
    独立行政法人 科学技術振興機構の作成した参考文献欄作成に関するガイドライン。科学技術振興機構と
    いうことで対象はあくまでも科学系論文であり、そのスタイルは人文系の参考文献の書き方とは異なりま
    すが、論文作成の際にも参考になる。【Web】


    日本語学習 支援サイト Online Writing Lab 第 5 章 引用・参考文献
    http://ksky.fc2web.com/owl5.htm（5 月 20 日最終閲覧）
    もともと日本語で論文を書く留学生のために作られたサイトですが、参考文献の書き方が丁寧なので、日
    本語で論文を書きたいすべての人の参考になるサイトです。参考文献のスタイルも文系向けのものとなっ
    ています。【Web】 

    ●出典https://www.library.osaka-u.ac.jp/doc/2013_Writing_references.pdf
    
    
    
    引用・参考文献（オンラインデータベース・電子ジャーナル）表示の基本例
    ＜形式＞
    著者名. 論文名. 誌名, 出版年, 巻数, 号数, p.始めのページ － 終りのページ. (掲載メディア),
    URL, (ｱｸｾｽ日)
    ※「巻数, 号数,」は「巻数（号数）,」の簡略表記でも可
    ＜記載例＞
    佐古丞. 日本の安全保障を考える: 中国問題を手がかりに. 法政論叢, 2011, 48(1), p. 221 - 226.
    (online), http://ci.nii.ac.jp/naid/110008897540, (参照 2013-08-02)

    ●出典https://www.gwc.gakushuin.ac.jp/library/references.pdf

   
   
  
    
    ※※これを解釈すると
    著者名(出版年) .「論文名」.誌名.『掲載メディア』, 巻数（号数）, p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)
        
        ・論文名必須
        ・掲載メディア（サイト名）必須
        ・誌名必須

        
    ●普段のパターン　URLがないときは「.」を消す
  
    ●掲載メディアに「.」を置きコントロール＋論文名の「.」を外す
    
    
    
    
    ・論文名必須
    ・掲載メディア（サイト名）必須
    ・誌名必須
    
　　●通常
   
   著者名(出版年) .「論文名」.誌名.『掲載メディア』, 巻数（号数）, p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)

   ●作者名なしの場合
    「論文名」. 誌名 (出版年). 『掲載メディア』. 巻数（号数）. p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)

    ●巻数なしの場合
    著者名(出版年) .「論文名」.誌名.『掲載メディア』. 号数. p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)
    
    ●号数なしの場合
    著者名(出版年) .「論文名」.誌名.『掲載メディア』. 巻数. p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)
    
    ●巻数・関数なしの場合
    著者名(出版年) .「論文名」.誌名.『掲載メディア』. p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)
    
    ●ページなしの場合
    著者名(出版年) .「論文名」.誌名.『掲載メディア』. 巻数（号数）.　URL, (ｱｸｾｽ日)
    
    ●ページ始めしかない場合
    著者名(出版年) .「論文名」.誌名.『掲載メディア』. 巻数（号数）. p.始めのページ.　URL, (ｱｸｾｽ日)
    ※終わりのページがないときは、ハイフンを消す
        
    ●ページ終わりしかない場合
    著者名(出版年) .「論文名」.誌名.『掲載メディア』, 巻数（号数）. p.終わりのページ.　URL, (ｱｸｾｽ日)
    ※始めのページがないときは、ハイフンを消す

  
  
   
    ●作者の名前 (1997) 「本の名前・論文名」. url, (閲覧日:アクセス日)
    
   本の名前（サイト名）の前に「.」を追加し、日付が後ろに来たら消す。

    作者の名前 (1997).「本の名前・論文名」. url, (閲覧日:アクセス日)
    「本の名前・論文名」(1997). url, (閲覧日:アクセス日)
      
            
   
   
    

    参考・引用文献の書き方（Webサイト中の記事）
    基本形
    （例）中央教育審議会. “第２期教育振興基本計画について（答申）”.
    文部科学省. 2013-04-25.
    http://www.mext.go.jp/component/b_menu/shingi/toushin/__icsFiles/
    afieldfile/2013/05/08/1334381_02_2.pdf, (参照2013-08-02)
    【解説】
    9 参照webページに掲載されているタイトルは“ ”で囲む。
    9 その他は基本的にDB・EJ中の論文の書き方と同じ。
    著者名.“Webページのタイトル”. Webサイトの名称. 更新日付.
    URL, (ｱｸｾｽ日)
    
    ●出典https://www.gwc.gakushuin.ac.jp/library/docs/citation4.pdf
   

   
   
    ※※ジャーなるの書き方まとめ
    
    著者名. 論文名. 誌名, 出版年, 巻数, 号数, p.始めのページ － 終りのページ. (掲載メディア),


   
   
   ※※PDFの書き方まとめ
   
    著者名.“Webページのタイトル”. Webサイトの名称. 更新日付. URL, (ｱｸｾｽ日)
    
    山下清美・川浦康至・川上善郎（2000）「WEB日記の内容と文体の特徴」（CmCC研究会第3回シンポジウム発表資料）, [online]kujira.psy.senshu-u.ac.jp/~Eyamasita/works/CmCC3.pdf（参照2003-１-３）.
    
    著者名. 文献名. 版表示, 出版年, 入手先URL, （入手日付）
      
    著書名
    投稿日/更新日
    「ページ、資料の名前」
    『サイトの名前』,
    URL
    （最終アクセス日）.
    
    
    http://univ.obihiro.ac.jp/~romero/latinoamerica/latinoamericabibliography.html

    
-->
    
    