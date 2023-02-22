<?
$menu_num = 1;
$cate_num = 5;
$page_num = 5;
$cate_title = '기업소개';
$page_title = 'Our Clients';
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
                        <p>세계 시장에서 우수한 품질을 인정받고 있습니다.
                        </p>
                    </div>
                    <div class="content_clients sec">
                        <div class="inner">
                            <div class="clients_list">
                                <figure class="clients_itm">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_01.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_02.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_03.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_04.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_05.png" alt="">
                                </figure>
                                <figure class="clients_itm">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_06.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_07.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_08.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_09.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_10.png" alt="">
                                </figure>
                                <figure class="clients_itm">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_11.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_12.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_13.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_14.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_15.png" alt="">
                                </figure>
                                <figure class="clients_itm">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_16.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_17.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_18.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_19.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_20.png" alt="">
                                </figure>
                                <figure class="clients_itm">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_21.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_22.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_23.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_24.png" alt="">
                                    <img src="<?= G5_THEME_URL ?>/img/thumb_client_25.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>






<?php
include_once(G5_THEME_PATH . '/tail.php');
?>