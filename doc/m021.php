<?
$menu_num = 2;
$cate_num = 2-1;
$page_num = 2-1;
$cate_title = '제품소개';
$page_title = '제품소개';
$page_slogan = '최고의 기술과 품질을 바탕으로 좋은 제품을 만들겠습니다.';

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
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m021.php">제품소개</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m022.php">원사</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m023.php">직물</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m024.php">염색</a></li>
                                    <li><a href="<?= G5_THEME_URL ?>/doc/m025.php">공정소개</a></li>
                                    <li><a href="/bbs/board.php?bo_table=notice">샘플북</a></li>
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
                        <p>우리와 늘 함께하는 좋은 실을 만듭니다.
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
                                
                            </div>
                        </div>
                    </div>






<?php
include_once(G5_THEME_PATH . '/tail.php');
?>