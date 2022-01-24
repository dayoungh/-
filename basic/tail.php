<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { 
    include_once(G5_THEME_PATH.'/tail-d.php');
}
?>

<footer class="footer">
            <ul>
            <li>대표이사 : 이덕희</li>
                <li>사업분야</li>
                <li>견적의뢰</li>
                <li>보유업면허</li>
                <li>오시는길</li>
                <li>채용공고</li>
            </ul>
            <address>© 2015 KSMATE.CO.Ltd. ALL RIGHTS RESERVED.</address>
        </footer>
    </div>
    <script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
    <script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>




    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    var pageNum = <?=$num?>;

    $('aside li').eq(pageNum-1).addClass('on');

    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");