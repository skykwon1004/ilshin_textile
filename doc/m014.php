<?
$menu_num = 1;
$cate_num = 4;
$page_num = 4;
$cate_title = '기업소개';
$page_title = '관계사';
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
                        <p>일신방직은 다양한 사업을 운영하고 있습니다.
                        </p>
                    </div>
                    <div class="content_sub_company sec">
                        <div class="inner">
                            <div class="scompany_list">
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/bg_sub_company01.jpg" alt="">
                                    <div class="list_tit">
                                        <h3>주식회사 신동</h3>
                                        <p>의류제조수출부문을 주요사업영역으로 1966년에
                                            설립되었으며 꾸준한 해외시장 개척을 통해
                                            1988년에는 의류수출 4천만 달러를 돌파한 바 있습니다.
                                            이후 새로운 사업영역으로 이탈리아 명품 가구를
                                            수입·판매하였으며, 1991년에는 신동와인㈜를
                                            별도 법인으로 설립하여 와인을 수입·판매하였습니다.
                                            현재는 이탈리아 프림미엄 탄산수인 '산펠레그리노'와
                                            미네랄워터 '아쿠아 파나'의 독점 수입·판매권을
                                            가지고 있습니다.
                                        </p>
                                    </div>
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/bg_sub_company02.jpg" alt="">
                                    <div class="list_tit">
                                        <h3>신동와인주식회사</h3>
                                        <p>(주)신동이 1991년에 설립한 회사로 세계주요 와인 생산국의
                                            엄선된 업체와의 독점공급계약을 통하여 세계적 브랜드의
                                            와인을 수입·판매하고 있습니다.
                                            와인애호가들에게 다양한 와인을 제공할뿐만 아니라
                                            와인시음회 등을 통하여 와인문화 정착과 대중화에도
                                            앞장서고 있습니다.
                                        </p>
                                    </div>
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/bg_sub_company03.jpg" alt="">
                                    <div class="list_tit">
                                        <h3>일신창업투자주식회사</h3>
                                        <p>성장가능성이 높은 아이디어와 기술력은 보유하고 있으나
                                            자본력이 취약한 벤처기업의 창업과 육성을 목적으로
                                            1990년에 설립되었습니다.
                                            대표적 투자사례로는 케쥬얼 의류 브랜드 '지오다노' ·
                                            바디케어용품 브랜드 '더바디샾'에 대한 투자,
                                            '은행나무침대(1996)' · '몽정기(2003)'에 이르는 영화산업에의 투자가 있습니다.
                                        </p>
                                    </div>
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/bg_sub_company04.jpg" alt="">
                                    <div class="list_tit">
                                        <h3>주식회사 지오다노</h3>
                                        <p>일신창업투자(주)와 홍콩의 지오다노인터내셔날이 합작투자로
                                            1994년 국내에 첫 선을 보였으며 현재는
                                            패션 유통 소매 산업에서 지속적인 성장을 거듭하고 있습니다.
                                            심플 베이직 캐주얼 GIORDANO, 영 캐주얼 BSX, 비즈니스
                                            캐주얼 Concepts 1 One 등의 브랜드를 바탕으로
                                            종합 패션 기업으로 거듭나고 있습니다.
                                        </p>
                                    </div>
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/bg_sub_company05.jpg" alt="">
                                    <div class="list_tit">
                                        <h3>더 바디샵</h3>
                                        <p>The Body Shop International PLC(영국) 와의 국내
                                            독점판매계약을 통한 화장품등의 공급을 위하여 1996년
                                            일신창업투자(주)에 의해 설립되었습니다.
                                            국내 다수 매장을 운영하여 친환경 바디케어 브랜드
                                            '더바디샵'의 상품을 공급하고 있으며, 2012년부터는 벨기에의 세계적 프리미엄 초콜렛 브랜드 '고디바'를 국내 런칭하여
                                            공급하고 있습니다.
                                        </p>
                                    </div>
                                </figure>
                                <figure>
                                    <img src="<?= G5_THEME_URL ?>/img/bg_sub_company06.jpg" alt="">
                                    <div class="list_tit">
                                        <h3>고디바</h3>
                                        <p>세계적인 프리미엄 초콜렛 <고디바(GODIVA)>는
                                            2012년 <바디샵>이 첫 국내런칭하여 매장을 개설한 이래
                                            현재 전국에 30여개 매장을 보유하고 있습니다.
                                            <고디바>는 1926년 벨기에의 브리셀에서 가족회사로 출발하여 1956년 벨기에 브리셀에 매장을 개설하였고
                                            첫 해외매장으로 1958년 프랑스 파리에 선보인 이후 세계적인 브랜드로 성장하였습니다.
                                            <고디바>의 브랜드는 영국의 귀족부인 레이디 고디바
                                            (Lady GODIVA)의 용기, 이타심, 관용의 상징입니다.
                                        </p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>





<?php
include_once(G5_THEME_PATH . '/tail.php');
?>