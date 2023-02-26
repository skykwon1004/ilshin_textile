<?
$menu_num = 2;
$cate_num = 2-1;
$page_num = 2-1;
$cate_title = '제품소개';
$page_title = '염색';
$page_slogan = '최고의 기술과 품질을 바탕으로 좋은 제품을 만들겠습니다.';

include '../../../common.php';
include_once(G5_THEME_PATH . '/head.php');
?>
                    
                    <div class="text">
                        <h2 class="con_text_h2">염색</h2>
                        <p>대형설비 및 품질 관리로 최고의 제품을 제작합니다.
                        </p>
                    </div>
                    <div class="content_product_detail">
                        <div class="inner">
                            <div class="pro_detail_list">
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/img_slide_product03_01.jpg" alt="">
                                    <div class="pro_d_tit">
                                        <h3>사염</h3>
                                        <p>원사의 선정부터 염색 가공에 이르기까지 엄격한 품질 관리를 통해 고품질의 염색사를 생산.
                                            년간 8,000톤을 생산할 수 있는 국내 최대 규모의 생산설비를 갖추고 고객의 요구에 신속히 대응.
                                            주요 제품은 면사, Polyester, 혼방사, Rayon계 염색사.
                                        </p>
                                    </div>
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/img_slide_product03_02.jpg" alt="">
                                    <div class="pro_d_tit">
                                        <h3>포염</h3>
                                        <p>롯트 사이즈의 대형화를 위하여 국내 최대 크기인 1600KG 염색기를 보유하고 있으며,
                                            자동 봉침기 및 Pre-setting 설비를 갖추고 있어 고품질 스판 편직물의 염색 가공 생산에 강점.
                                            년간 11,000톤의 니트원단 염색 능력을 갖추고 고객의 다양한 요구에 신속히 대응하고 있음.
                                        </p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="pro_contact mar_top">
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