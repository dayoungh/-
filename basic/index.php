<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main>
            <section class="main">
                <div class="m_slider">
                    <figure class="itm01"></figure>
                    <figure class="itm02"></figure>
                    <figure class="itm03"></figure>
                </div>
                <div class="slogan">
                    <h2>Since 2008</h2>
                <h3>&ldquo;빌딩관리의 모든 것&rdquo;</h3>
                    <p>케이에스메이트가 함께합니다.</p>
                </div>
            </section>
            <section class="customer">
                <div class="container">
                    <div class="lf">
                        <h3>News &amp; Notice <a href="/bbs/board.php?bo_table=notice"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
                        <?php echo latest('theme/basic', 'notice', 4, 23); ?>
                    </div>
                    <div class="cn">
                        <!-- * 카카오맵 - 지도퍼가기 -->
                        <!-- 1. 지도 노드 -->
                        <div id="daumRoughmapContainer1643007409076"
                            class="root_daum_roughmap root_daum_roughmap_landing"></div>

                        <!--
                            2. 설치 스크립트
                            * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                        -->
                        <script charset="UTF-8" class="daum_roughmap_loader_script"
                            src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js" style="width: 100%;"></script>

                        <!-- 3. 실행 스크립트 -->
                        <script charset="UTF-8">
                            new daum.roughmap.Lander({
                                "timestamp": "1643007409076",
                                "key": "28wga",
                                // "mapWidth": "640",
                                "mapHeight": "250"
                            }).render();
                        </script>
                    </div>
               <div class="rt">

                        <strong><a href="tel:02-704-3001"><i class="fa fa-phone"></i>02-704-3001</a></strong>
                        <span>
                            Fax : 02-704-3144
                        </span>

                    </div>
                </div>
            </section>
        </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');