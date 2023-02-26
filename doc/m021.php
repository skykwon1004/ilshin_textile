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
                    
                    <div class="text">
                            <h2 class="con_text_h2">제품소개</h2>
                            <p>일신의 제품은 세계 시장에서 우수한 품질을 인정받고 있습니다.
                            </p>
                        </div>
                        <div class="content_product">
                            <div class="inner">
                                <div class="product_list">
                                    <div class="product_itm">
                                        <figure>
                                            <img src="<?= G5_THEME_URL ?>/img/sub_pro01.jpg" alt="">
                                            <div class="product_itm_tit">
                                                <strong>Yarn</strong>
                                                <h3>원사</h3>
                                                <a href="" class="more">MORE VIEW</a>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="product_itm">
                                        <figure>
                                            <img src="<?= G5_THEME_URL ?>/img/sub_pro02.jpg" alt="">
                                            <div class="product_itm_tit">
                                                <strong>Textile</strong>
                                                <h3>직물</h3>
                                                <a href="" class="more">MORE VIEW</a>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="product_itm">
                                        <figure>
                                            <img src="<?= G5_THEME_URL ?>/img/sub_pro03.jpg" alt="">
                                            <div class="product_itm_tit">
                                                <strong>Dyeing</strong>
                                                <h3>염색</h3>
                                                <a href="" class="more">MORE VIEW</a>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro_contact">
                        <div class="pro_contact_tit">
                            <strong>자세한 상담을 원하시나요?</strong>
                            <span>제품에 대해 궁금한 사항은 언제든지 문의 바랍니다.</span>
                            <a href="">제품문의 바로가기</a>
                        </div>
                    </div>
                </div>





<?php
include_once(G5_THEME_PATH . '/tail.php');
?>