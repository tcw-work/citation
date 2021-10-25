</main>
</div>


<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-sm-12 footer-list">
                    <ul>
                        <li class="col-sm-4"><a href="#">Information</a></li>
                        <li class="col-sm-4"><a href="#">注意事項</a></li>
                        <li class="col-sm-4"><a href="#">ログイン</a></li>
                    </ul>
                </div>
                <div class="footer-copy">
                    <p>©test-innyousite.com（仮）</p>
                </div>
            </div>
        </div>
    </div>
</footer>


</div>


<script>
    $(function() {

        $('.citation-block:not(:first)').hide();
        $('.citatoin-head').click(function() {
            $(this).next('').slideToggle(500);
            $(this).toggleClass("citatoin-head-ac");

        });

        $('.btn').hover(function() {
            $(".result-input").css("background-color", "ffc107")
        });

    });

</script>
</body>