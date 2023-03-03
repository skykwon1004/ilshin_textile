$(function () {
    // header
    $(window).on('scroll', function () {
        // console.log('스크롤 : ', $(window).scrollTop());   
        if ($(window).scrollTop() > 0) {
            $('.header_wrap').addClass('on');
        } else {
            $('.header_wrap').removeClass('on');
        }
    });



    // sitemap
    $('.bars').on('click', function () {
        $('.sitemap').toggleClass('on')
        $('.bars').toggleClass('on')
        $('body').toggleClass('on')
        // $('.lang').toggleClass('on')
    })

    // main_slid

    $('.main_slide').on('init afterChange', function (e, s, c) {
        // c = 0,1,2
        var current = $('.main_slide .slick-current');
        current.addClass('on').siblings().removeClass('on');
        $('.mainVisual .main_slide_num span').text('0' + (c ? c + 1 : 1));
        $('.mainVisual .main_slide_num strong').text('0' + s.slideCount)
        $('.mainVisual .main_slide_dots li').removeClass('on');
        $('.mainVisual .main_slide_dots li').eq(c ? c : 0).addClass('on');
    });


    $('.main_slide').slick({
        fade: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $('.mainVisual .arrows i:first-child').on('click', function () {
        $('.main_slide').slick('slickPrev')
    });

    $('.mainVisual .arrows i:last-child').on('click', function () {
        $('.main_slide').slick('slickNext')
    });


    $('.mainVisual .main_slide_dots button').on('click', function () {
        var idx = $(this).parent().index();
        $('.main_slide').slick('slickGoTo', idx);
    });

    $('.mainVisual .main_slide_dots li').on('click', function () {
        // var idx = $(this).index(); // 0 , 1 , 2;
        // eq(0) = nth-child(1);
        $('.mainVisual .main_slide_dots li').removeClass('on');
        $(this).addClass('on');
    });


    // mainProducts
    $('.product_slide').slick({
        arrows: false,
        centerMode: true,
        centerPadding: '300px',
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '0',
                }
            }
        ]
    });

    $('.product_slide').on('init reInit afterChange', function (e, s, c) {
        $('.mainProducts .port').eq(c).addClass('on').siblings().removeClass('on');
    });


    $('.mainProducts .arrows i:first-child').on('click', function () {
        $('.product_slide').slick('slickPrev')
    });


    $('.mainProducts .arrows i:last-child').on('click', function () {
        $('.product_slide').slick('slickNext')
    });





    // subpage

    $('.sub_gnb .btn').on('click', function () {
        // $('.fl ul').slideToggle();
        $(this).toggleClass('on');
        // $(this) : 내가 클릭한 것 (하나)
        $(this).prev().slideToggle();
        // $(this).prev() : 내가 클릭한 것 전에꺼 (ul이 두개니깐 this안하면 ul 두개 다 선택됨)
    })





    $('.sample_slide').slick({
        arrows: false,
        // centerMode: true,
        // centerPadding: '300px',
        dots: false,
    });

    $('.content_samplebook .arrows i:first-child').on('click', function () {
        $('.sample_slide').slick('slickPrev')
    });

    $('.content_samplebook .arrows i:last-child').on('click', function () {
        $('.sample_slide').slick('slickNext')
    });

    $('.content_samplebook .sample_list>li').on('click', function () {
        var idx = $(this).index();
        $('.content_samplebook .sample_con>div').removeClass('on');
        $('.content_samplebook .sample_con>div').eq(idx).addClass('on');

        $('.content_samplebook .sample_list>li').removeClass('on');
        $(this).addClass('on');
    })

































    // to top button
    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();
        console.log(sct);

        if (sct > 500) {
            //$('.toTop').fadeIn();
            $('.to_top').addClass('on')
        } else {
            $('.to_top').removeClass('on')
        }
    });

    $('.to_top').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });




    //mopen
    $('.mopen').on('click', function () {
        $('.header').toggleClass('on')
    });


    $('.header .gnb>ul>li>a').on('click', function (e) {
        if ($('.header').hasClass('on')) {
            // header에 on이 붙었을때만 이벤트 정지하라
            e.preventDefault();
        };
        // return false;     a 이벤트 막는법 두번째
        console.log(e, e.currentTarget, $(this));
        $('.header .gnb>ul>li .smenu').removeClass('on');
        $(this).next().addClass('on');
        // 내가 클릭한 this 의 next에(자식) on을 붙여라
    });


    // 모바일 메뉴열었을때 뒤에 스크롤 안되게하는
    $('.header').on('scroll wheel touchmove', function (e) {
        if ($('.header').hasClass('on')) {
            // header에 on이 붙었을때만 이벤트 정지하라
            e.preventDefault();
        };
    });









    // AOS.init();

})