<?
$menu_num = 1;
$cate_num = 3;
$page_num = 3;
$cate_title = '기업소개';
$page_title = '사업장안내';
$page_slogan = '나날이 새로워지는 "일신(日新)"이 되겠습니다.';

include '../../../common.php';
include_once(G5_THEME_PATH . '/head.php');
?>

                    <div class="text">
                        <h2 class="con_text_h2"><?= $page_title ?></h2>
                        <p>글로벌 일신으로 성장하겠습니다.
                        </p>
                    </div>
                    <div class="content_map sec_top">
                        <div class="inner">
                            <h2>국내지점</h2>
                            <div class="map_list">
                                <div class="map_list_itm">
                                    <figure>
                                        <img src="<?= G5_THEME_URL ?>/img/companygall01_01.jpg" alt="">
                                    </figure>
                                    <ul>
                                        <strong>본사</strong>
                                        <li>
                                            <span>주소</span>
                                            <p>[우편번호 07237] 서울특별시 영등포구 은행로 11 (여의도동)</p>
                                        </li>
                                        <li>
                                            <span>전화번호</span>
                                            <p>02-3774-0114</p>
                                            <span>팩스</span>
                                            <p>02-786-5891~4</p>
                                        </li>
                                        <a href="https://goo.gl/maps/ZSczvGr325zNFYQZA" target="_blank">지도로 보기<i class="xi-maker"></i>
                                        </a>
                                    </ul>
                                </div>
                                <div class="map_list_itm">
                                    <figure>
                                        <img src="<?= G5_THEME_URL ?>/img/companygall02_01.jpg" alt="">
                                    </figure>
                                    <ul>
                                        <strong>광주공장</strong>
                                        <li>
                                            <span>주소</span>
                                            <p>[우편번호 62413] 광주광역시 광산구 평동산단1번로 71(옥동)</p>
                                        </li>
                                        <li>
                                            <span>전화번호</span>
                                            <p>062-600-5301</p>
                                            <span>팩스</span>
                                            <p>062-600-5305</p>
                                        </li>
                                        <a href="https://goo.gl/maps/12hZC1bSvGagJ1GA8" target="_blank">지도로 보기<i class="xi-maker"></i>
                                        </a>
                                    </ul>
                                </div>
                                <div class="map_list_itm map_next">
                                    <figure>
                                        <img src="<?= G5_THEME_URL ?>/img/companygall03_01.jpg" alt="">
                                    </figure>
                                    <ul>
                                        <strong>반월공장</strong>
                                        <li>
                                            <span>주소</span>
                                            <p>[우편번호 15438] 경기도 안산시 단원구 산단로68번길 97(초지동)</p>
                                        </li>
                                        <li>
                                            <span>전화번호</span>
                                            <p>031-489-4604</p>
                                            <span>팩스</span>
                                            <p>031-489-4600</p>
                                        </li>
                                        <a href="https://goo.gl/maps/r5edqNi86BNu9sLG9" target="_blank">지도로 보기<i class="xi-maker"></i>
                                        </a>
                                    </ul>
                                </div>
                                <h2>해외지점</h2>
                                <div class="map_list_itm map_end">
                                    <figure>
                                        <img src="<?= G5_THEME_URL ?>/img/companygall04_01.jpg" alt="">
                                    </figure>
                                    <ul>
                                        <strong>일신베트남</strong>
                                        <li>
                                            <span class="ad">주소</span>
                                            <p>30-4, Phuoc Dong Industrial Zone, Phuoc Dong, Go Dau Commune Tay Ninh Province, Vietnam</p>
                                        </li>
                                        <li>
                                            <span>전화번호</span>
                                            <p>(0276) 3534-600</p>
                                            <span>팩스</span>
                                            <p>(0276) 3534-603</p>
                                        </li>
                                        <a href="https://goo.gl/maps/55qNbRaB4YNnHV1NA" target="_blank">지도로 보기<i class="xi-maker"></i>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





<?php
include_once(G5_THEME_PATH . '/tail.php');
?>