<?
$menu_num = 1;
$cate_num = 1;
$page_num = 1;
$cate_title = '기업소개';
$page_title = '기업정보';
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
                        <p>섬유생산을 반세기가 넘도록 한 우물만 파 온 일신입니다.
                        </p>
                    </div>
                    <div class="content_company sec">
                        <div class="inner">
                            <p>
                                1951년 설립된 우리 회사는 의류 소재인 면사 생산에 반세기가 넘도록 꾸준히 한 우물을 파 온 기업입니다.<br />
                                섬유산업은 1987년까지 수출비중 1위를 달성하며 수출대국의 견인차로서 경제발전에 기여했으나
                                88서울올림픽 이후 급격하게 생산설비가 축소되었습니다.<br /><br />
                                그러나 우리 회사는 선진국형 자동화설비를 계속 확충하여 시설규모뿐 아니라 제품품질에서도 업계를 선도해 왔습니다.<br />
                                앞으로도 업계의 리더답게 섬유산업의 발전을 위해 <b>나날이 새로워지는 “일신(日新)”</b>이 되겠습니다.
                            </p>
                            <div class="con_ilshin">
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/sitemap01.png" alt="">
                                </figure>
                                <div class="con_text">
                                    <div class="con_text_left">
                                        <strong>구일신(苟日新)<br />
                                            일일신(日日新) 우일신(又日新)
                                        </strong>
                                        <span>
                                            사서(四書)중의 대학(大學)에 있는 글.<br />
                                            “ 진실로 날로 새로워지면 나날이
                                            새로워지고 또 날로 새롭게 함 ”<br />
                                            <날마다 잘못을 고쳐 덕(德)을 닦는 것을 게을리 하지 않음>
                                        </span>
                                    </div>
                                    <div class="con_text_right">
                                        <strong>우리나라에 목화씨를<br />
                                            처음 들여 온 문익점의 자(字)
                                        </strong>
                                        <span>
                                            사서(四書)중의 대학(大學)에 있는 글.<br />
                                            “ 진실로 날로 새로워지면 나날이
                                            새로워지고 또 날로 새롭게 함 ”<br />
                                            <날마다 잘못을 고쳐 덕(德)을 닦는 것을 게을리 하지 않음>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content_ceo bg">
                        <div class="inner">
                            <div class="text">
                                <h2>CEO 인사말</h2>
                                <p>섬유업계 리더로서의 역할과 소명을 다하겠습니다.</p>
                            </div>
                            <div class="con_ceo_wrap">
                                <div class="ceo_left">
                                    <p class="p01">우리 회사의 홈페이지를 방문해 주신 여러분을 환영합니다.
                                    </p>
                                    <p class="p02">먼저 반세기가 넘도록 오로지 외길만을 달려 온 우리 회사의 발자취를 통해서 우리나라 최초의 근대산업이며, 수출의 주역으로 경제발전의 견인차 역할을
                                        한 효자산업인 면방산업을 이해하는 계기가 되기를 기대합니다.<br/>
                                        아울러 고객과 함께 발전해 온 우리 회사의 모습을 담아 면방업계
                                        선두주자로서 제 몫을 다 하고 있음을 알려드리고 여러분과의 격의 없이
                                        소통하는 창구로 활용되기를 기대합니다.
                                    </p>
                                    <p class="p03">나날이 새로워지는 일신의 모습을 지켜봐 주시고
                                        더욱 성원해주시기바랍니다.
                                    </p>
                                    <p class="p04">대표이사 사장 <b>김 정 수</b></p>
                                </div>

                                <div class="ceo_right">
                                    <figure>
                                        <img src="<?= G5_THEME_URL ?>/img/img_ceo.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>





<?php
include_once(G5_THEME_PATH . '/tail.php');
?>