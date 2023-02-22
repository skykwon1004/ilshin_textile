<?
$menu_num = 1;
$cate_num = 2;
$page_num = 2;
$cate_title = '기업소개';
$page_title = '연혁';
$page_slogan = '나날이 새로워지는 "일신(日新)"이 되겠습니다.';

include '../../../common.php';
include_once(G5_THEME_PATH . '/head.php');
?>
                    <div class="sub_menubar">
                        <div class="inner">
                            <div class="home">
                                <a href="/"><i class="xi-home"></i></a>
                            </div>
                            <div class="sub_gnb">
                                <ul>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m011.php">기업소개</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m021.php">제품소개</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m031.php">투자정보</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m041.php">윤리경영</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m051.php">채용정보</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m061.php">고객지원</a></li>
                                </ul>
                                <div class="btn">
                                    <?= $cate_title ?><i class="xi-angle-down"></i>
                                </div>
                            </div>
                            <div class="sub_gnb">
                                <ul>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m011.php">기업정보</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m012.php">연혁</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m013.php">사업장안내</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m014.php">관계사</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m015.php">Our Clients</a></li>
                                    <li><a href="/bbs/board.php?bo_table=notice">일신소식</a></li>
                                </ul>
                                <div class="btn btn02">
                                    <?= $page_title ?><i class="xi-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subContainer">
                <div class="content">           
                    <div class="text">
                        <h2 class="con_text_h2"><?= $page_title ?></h2>
                        <p>일신방직의 발자취를 소개합니다.
                        </p>
                    </div>
                    <div class="content_history sec">
                        <div class="inner">
                            <figure>
                                <img src="<?= G5_THEME_URL ?>/img/logo_color.png" alt="">
                            </figure>
                            <div class="history_warp">
                                <div class="history_itm">
                                    <dl>
                                        <dt class="left">2015.10</dt>
                                        <dd>일신베트남 현지법인 준공</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">2009.5</dt>
                                        <dd>한남동 일신빌딩 준공</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">2007.3</dt>
                                        <dd>광주2공장 건설</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">2001.11</dt>
                                        <dd>창립50주년 일신가족 축제</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1991.4</dt>
                                        <dd>여의도 사옥 준공</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">1991.4</dt>
                                        <dd>청원공장 건설</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1987.4</dt>
                                        <dd>선진국형 면방공장 건설</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">1984.12</dt>
                                        <dd>반월염색공장 건설</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1982.3</dt>
                                        <dd>김영호 대표이사 취임</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">1978.6</dt>
                                        <dd>창업자 김형남 별세</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1973.5</dt>
                                        <dd>기업공개</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">1972.12</dt>
                                        <dd>김창호 대표이사 취임</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1961.8</dt>
                                        <dd>일신방직주식회사로 분할 재출범</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">1951.11</dt>
                                        <dd>전남방직주식회사 출범</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1961.8</dt>
                                        <dd>일신방직주식회사로 분할 재출범</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">1951.11</dt>
                                        <dd>전남방직주식회사 출범</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1950.6</dt>
                                        <dd>한국전쟁으로 공장파괴</dd>
                                    </dl>
                                    <dl>
                                        <dt class="right">1945.11</dt>
                                        <dd>전남방직공사(全南紡織公社)</dd>
                                    </dl>
                                    <dl>
                                        <dt class="left">1935.9</dt>
                                        <dd>종연방적(鐘淵紡績)광주공장</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>





<?php
include_once(G5_THEME_PATH . '/tail.php');
?>