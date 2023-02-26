<?
$menu_num = 2;
$cate_num = 2-1;
$page_num = 2-1;
$cate_title = '제품소개';
$page_title = '공정소개';
$page_slogan = '최고의 기술과 품질을 바탕으로 좋은 제품을 만들겠습니다.';

include '../../../common.php';
include_once(G5_THEME_PATH . '/head.php');
?>
                    
                    <div class="text">
                        <h2 class="con_text_h2">공정소개</h2>
                        <p>우리가 입고 있는 옷은 [면방적공정]에서 생산된 "실"로 만든 것 입니다.
                        </p>
                    </div>
                    <div class="content_product_yotube">
                        <div class="iframe_wrap">
                            <div class="iframe_case">
                                <iframe id="video" width="100%" height="315"
                                    src="https://www.youtube.com/embed/KZT27jto07k" frameborder="0"
                                    allow="encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
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