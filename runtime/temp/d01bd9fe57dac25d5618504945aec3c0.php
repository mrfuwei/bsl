<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy_pro\WWW\bsl_admin\public/../application/index\view\index\index.html";i:1617850776;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>宝仕龙</title>
    <link href="images/logo.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/my_animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/main.css?v=11">
    <link rel="stylesheet" href="css/common.css">
</head>
<style>

        picture[data-object-fit=cover] {width: 100%;height: 100%;padding: 0!important;}
        picture[data-object-fit=cover] img {object-fit: cover;-o-object-fit: cover;width: 100%;height: 100%;}
        .main2 {visibility: hidden;overflow: hidden;height: 100vh;position: relative;z-index: 2;background-color: #ffffff;}
        .main2 * {font-size: 100%;}
        .main2.is-active {visibility: inherit;}
        .home_section {width: 100%;color: #fff;position: relative;z-index: 1;}
        .home_section.is-active {visibility: inherit;}
        .home_section_model_left {position: relative;}
        .home_section_1_1,.home_section_1_3 {z-index: 2;}
        .home_section_1_1 .home_section_model_left,.home_section_1_3 .home_section_model_left {width: 37.5%;}
        .home_section_1_2 {-webkit-box-orient: horizontal;-webkit-box-direction: reverse;-ms-flex-direction: row-reverse;flex-direction: row-reverse;}
        .home_section_1_2 .home_section_model_left {position: relative;width: 35%;}
        .home_section_model_count {display: none;}
        figure,figcaption {display: block;}
        .home_section_1_1 figure {position: relative;box-sizing: border-box;}
        .home_section_1_1 .media_wrapper {position: absolute;z-index: 0;top: 0;left: 0;width: 100%;height: 100%;}
        .home_section_1_1 .media_wrapper {transform: translateX(44%) scaleX(1) scaleY(1) translateY(-50%) translateZ(0px) scale(0.56);-webkit-transition: all ease-in-out 1500ms;-moz-transition: all ease-in-out 1500ms;-ms-transition: all ease-in-out 1500ms;-o-transition: all ease-in-out 1500ms;transition: all ease-in-out 1500ms;}
        .home_section_1_1 .media_wrapper.isactive {transform: translateX(0%) scaleX(1) scaleY(1) translateY(-50%) translateZ(0px) scale(1);}

        .home_section .media {width: 100%;height: 100%;overflow: hidden}
        .r {position: relative;display: block;}
        .r img {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}
        img.lazy {-webkit-transition: opacity 1.2s cubic-bezier(.16,1.08,.38,.98);-o-transition: opacity 1.2s cubic-bezier(.16,1.08,.38,.98);transition: opacity 1.2s cubic-bezier(.16,1.08,.38,.98);opacity: 0;}
        img.lazy.loaded {opacity: 1;}
        .h_1 {line-height: .91;font-size: 16vw;}
        .home_section_1_1 .h_1 {font-size: 12vw;margin-bottom: 1.33333vw;}
        .t_words {display: inline-block;}
        .t_words>span,.t_words>span>span {display: inline-block;padding-bottom: .2em;}
        .t_words>span {overflow: hidden;padding-top: 0.01em;}
        .t_words>span>span {font-weight: 400;color: #ffffff;-webkit-transform: translateY(-100%) translateZ(0);transform: translateY(-100%) translateZ(0);margin-bottom: -.2em;-webkit-transition: all ease-in-out 750ms;-moz-transition: all ease-in-out 750ms;-ms-transition: all ease-in-out 750ms;-o-transition: all ease-in-out 750ms;transition: all ease-in-out 750ms;}
        .t_words.isactive>span>span {-webkit-transform: translateY(0) translateZ(0);-moz-transform: translateY(0) translateZ(0);-ms-transform: translateY(0) translateZ(0);-o-transform: translateY(0) translateZ(0);transform: translateY(0) translateZ(0);}

        .home_section figcaption .sub.p_m {font-weight: 400}
        .home_section_1_1 figcaption .sub.p_m,.home_section_1_3 figcaption .sub.p_m {line-height: 1.15;}
        .home_section .home_section_btn{margin-top: 6.66667vw;}
        .home_section_btn a:after {-webkit-transition: border-color 1s cubic-bezier(.26,1.04,.54,1),background 1s cubic-bezier(.26,1.04,.54,1);-o-transition: border-color 1s cubic-bezier(.26,1.04,.54,1),background 1s cubic-bezier(.26,1.04,.54,1);transition: border-color 1s cubic-bezier(.26,1.04,.54,1),background 1s cubic-bezier(.26,1.04,.54,1);    border: 2px solid #fff;    content: "";display: block;position: absolute;top: 0;left: 0;z-index: -1;width: 100%;height: 100%;box-sizing: border-box;}
        .home_section_1_1 .home_section_model_count {transform: translateY(100%) translateX(73.3333%) translateZ(0px);-webkit-transition: all ease-in-out 1500ms;-moz-transition: all ease-in-out 1500ms;-ms-transition: all ease-in-out 1500ms;-o-transition: all ease-in-out 1500ms;transition: all ease-in-out 1500ms;}
        .home_section_1_1 .home_section_model_count.isactive {transform: translateY(0%) translateX(0%) translateZ(0px);}
        .home_section_1_2 .home_section_model_count {transform: translateY(100%) translateX(-78.5714%) translateZ(0px);-webkit-transition: all ease-in-out 1500ms;-moz-transition: all ease-in-out 1500ms;-ms-transition: all ease-in-out 1500ms;-o-transition: all ease-in-out 1500ms;transition: all ease-in-out 1500ms;}
        .home_section_1_2 .home_section_model_count.isactive {transform: translateY(0%) translateX(0%) translateZ(0px);}
        .home_section_model_count .number {transform: translateX(-0.15em) translateZ(0px);opacity: 0;-webkit-transition: all ease-in-out 1500ms;-moz-transition: all ease-in-out 1500ms;-ms-transition: all ease-in-out 1500ms;-o-transition: all ease-in-out 1500ms;transition: all ease-in-out 1500ms;color: #e7e7e7;}
        .home_section_model_count .sep {transform: skew(0) translateZ(0px);-webkit-transition: all ease-in-out 1500ms;-moz-transition: all ease-in-out 1500ms;-ms-transition: all ease-in-out 1500ms;-o-transition: all ease-in-out 1500ms;transition: all ease-in-out 1500ms;display: inline-block;margin-top: .2ch;height: 1.07ch;overflow: hidden;}
        .home_section_model_count .sep u {display: block;height: 100%;width: .08em;background: #e7e7e7;-webkit-transform: translateY(100%);-ms-transform: translateY(100%);transform: translateY(100%);margin-left: 1.38889vw;margin-right: 1.38889vw;;-webkit-transition: all ease-in-out 750ms;-moz-transition: all ease-in-out 750ms;-ms-transition: all ease-in-out 750ms;-o-transition: all ease-in-out 750ms;transition: all ease-in-out 750ms;}
        .number_wrapper.isactive .number {opacity: 1;}
        .number_wrapper.isactive .sep.isactive {transform: skew(-20deg) translateZ(0px);}
        .number_wrapper.isactive .sep u {transform: translateY(0) translateZ(0)}

        .home_section_1_2 .media {transform: translateY(0%) translateZ(0px);  }
        .home_section_1_2 picture {-webkit-transition: all ease-in-out 1500ms;-moz-transition: all ease-in-out 1500ms;-ms-transition: all ease-in-out 1500ms;-o-transition: all ease-in-out 1500ms;transition: all ease-in-out 1500ms;transform: translateY(-100%) translateZ(0px);}
        .home_section_1_2 picture.isactive {transform: translateY(0%) translateZ(0px);}
        .home_video_wrapper {display: none;}
        video {font-family: "object-fit: cover;";}
        video[data-object-fit=cover] {-o-object-fit: cover;object-fit: cover;width: 100%;height: 100%;padding: 0!important;}

        .section-banner {height: 100vh;}
        .section-banner .swiper-container {height: 100%;}
        .section-banner .swiper-slide {background-color: #000000;}
        .section-banner .swiper-slide .background-image {position: absolute;top: 0;right: 0;left: 0;bottom: 0;background-size: cover;background-position: 50%;opacity: .7;-webkit-transform-origin: center center;transform-origin: center center;-webkit-transition: all ease-in-out 750ms;-moz-transition: all ease-in-out 750ms;-ms-transition: all ease-in-out 750ms;-o-transition: all ease-in-out 750ms;transition: all ease-in-out 750ms;}
        .section-banner .swiper-slide.hover .background-image {-webkit-transform: scale(1.08, 1.08);-moz-transform: scale(1.08, 1.08);-ms-transform: scale(1.08, 1.08);-o-transform: scale(1.08, 1.08);transform: scale(1.08, 1.08);}
        .section-banner .swiper-navigation {position: absolute;z-index: 3;top: 90vh;right: 80px;margin-top: -20px;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-align-items: center;}
        .section-banner .swiper-navigation .navigation-item {color: #fff;letter-spacing: 3px;font-size: 11px;text-transform: uppercase;cursor: pointer;padding: 20px;}
        .section-banner .swiper-navigation .navigation-item.prev {}
        .section-banner .swiper-navigation .navigation-item.next {}
        .section-banner .swiper-navigation .navigation-separator {width: 50px;height: 1px;background: #fff;margin: 0;}
        .section-banner .swiper-pagination {bottom: 8vw;left: 30vw;width: unset}
        .section-banner .swiper-pagination .dot {display: inline-block;margin: 0 8px;opacity: .25;cursor: pointer;height: 7px;width: 7px;background: #fff;border-radius: 100%;margin-left: 10px;position: relative;}
        .section-banner .swiper-pagination .dot:before {content: "";position: absolute;top: 15px;right: -6px;height: 1px;width: 0;background: #fff;-webkit-transition: all 0s ease;transition: all 0s ease;}
        .section-banner .swiper-pagination .dot.swiper-pagination-bullet-active {opacity: 1;background-color: transparent;}
        .section-banner .swiper-pagination .dot.swiper-pagination-bullet-active:before {-webkit-transition: all .5s ease;transition: all .5s ease;width: 16px;}
        .section-banner .swiper-pagination .dot span {line-height:1;color: #ffffff;display: block;pointer-events: none;font-size: 10px;-webkit-transition: all 0s ease;transition: all 0s ease;opacity: 0;-webkit-transform: translateX(-120%);transform: translateX(-120%);}
        .section-banner .swiper-pagination .dot.swiper-pagination-bullet-active span {opacity: 1;-webkit-transition: all .5s ease;transition: all .5s ease;-webkit-transform: translateX(-20%);transform: translateX(-20%);}
        .uppercase {text-transform: uppercase;}
        .hero-slider-content {height: 100vh;position: absolute;z-index: 2;top: 0;left: 50%;transform: translateX(-50%);display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-justify-content: center;-webkit-box-flex-direction: column;-moz-box-flex-direction: column;-ms-flex-direction: column;-webkit-box-orient: vertical;-webkit-box-direction: normal;flex-direction: column;width: 100%;max-width: 1280px;padding-left: 65px;padding-right: 65px;margin: 0 auto;}
        .text-slide-container {position: relative;margin-left: 100px;display: -webkit-box;display: -ms-flexbox;display: flex;width: 70vw;}
        .text-slide-container .flickity-viewport {position: relative;overflow: visible;width: 100%;touch-action: pan-y;height: 151px;}
        .text-slide-container .flickity-slider {position: absolute;width: 100%;height: 100%;-webkit-transition: all ease-in-out 1000ms;-moz-transition: all ease-in-out 1000ms;-ms-transition: all ease-in-out 1000ms;-o-transition: all ease-in-out 1000ms;transition: all ease-in-out 1000ms;}
        .text-slide-container .text-slider {width: 65vw;-webkit-transition: all 1s ease;transition: all 1s ease;opacity: .4;bottom: 0;cursor: pointer;-webkit-box-flex: 0 0 65vw;-ms-flex: 0 0 65vw;flex: 0 0 65vw;-webkit-transform-origin: left top;transform-origin: left top;position: absolute;}
        .text-slide-container .text-slider.is-selected {pointer-events: auto;opacity: 1;}
        .text-slide-container .text-slider-caption {color: #fff;letter-spacing: 3.5px;font-size: 14px;padding-bottom: 10px;margin-left: 10px;-webkit-transition: padding-left 2s ease;transition: padding-left 2s ease;}
        .text-slide-container .is-selected .text-slider-caption {padding-left: 5%;}
        .text-slide-container .link-editor-wrapper {margin-top: 30px;position: relative;}
        .text-slide-container .link-editor-wrapper p {}
        .text-slide-container .link-editor-wrapper p a{color: #fff;font-size: 95px;letter-spacing: 10px;line-height: 1;max-width: 56vw;padding-right: 5%;display: block;-webkit-transition: padding 1s ease;transition: padding 1s ease;text-transform: uppercase}
        .text-slide-container .text-slider.is-selected p a {padding-left: 5%;padding-right: 0;}
        .text-slider-line {width: 93%;height: 1px;background: hsla(0,0%,100%,.33);position: relative;margin-left: calc(5% + 120px);}
        .text-slider-line .line-active {width: 0;height: 1px;background: #fff;-webkit-transition: width 1s ease;transition: width 1s ease;}



        @media screen and (min-width: 820px) {
            .home_section {overflow: hidden;height: 100vh;position: absolute;top: 0;left: 0;display: flex;visibility: hidden;}
            .home_section_model_count {bottom: 0;color: #e7e7e7;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;background: #fff;width: 100%;height: 40vh;font-size: 7.88194vw;}
            .home_section_model_count {display: flex;position: absolute;}
            .home_section_1_1 figure {display: -webkit-box;display: -ms-flexbox;display: flex;width: 62.5%;-webkit-box-align: center;-ms-flex-align: center;align-items: center;padding: 0 10%;}
            .home_section_1_2 .home_section_figure {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;width: 65%;}
            .home_section_1_2 .home_section_caption {width: 57.69231%;margin-top: 40vh;margin-left: 15.38462%;}
            .home_section_1_1 .media_wrapper,.home_section_1_3 .media_wrapper {position: absolute;left: 0;top: 0;z-index: 0;width: 100%;height: calc(100% + 2px);-webkit-transform-origin: top left;-ms-transform-origin: top left;transform-origin: top left;top: 50%;}
            .home_section_1_2 .media_wrapper {width: 100%;height: 60vh;position: absolute;z-index: 0;bottom: 100%;right: 0;top: auto;transform: scale(1.78571) translateZ(0px);-webkit-transform-origin: bottom left;-ms-transform-origin: bottom left;transform-origin: bottom left;-webkit-transition: all ease-in-out 1500ms;-moz-transition: all ease-in-out 1500ms;-ms-transition: all ease-in-out 1500ms;-o-transition: all ease-in-out 1500ms;transition: all ease-in-out 1500ms;}
            .home_section_1_2 .media_wrapper.isactive {transform: scale(1) translateZ(0px);}
            .home_section_1_1 picture {background-color: #1a1a1a;}
            .home_section_1_1 img.lazy.loaded {opacity: .7;}
            .home_section_1_1 figcaption {position: relative;z-index: 1;}
            .h_1 {line-height: 0.84;}
            .home_section_1_1 .h_1 {font-size: 5.90278vw;margin-bottom: .69444vw;}
            .home_section_1_2 .h_1 {font-size: 4.16667vw;margin-bottom: 1.04167vw;}
            .home_section figcaption .sub.p_m {font-size: 1.38889vw;}
            .home_section_1_1 figcaption .sub.p_m,.home_section_1_3 figcaption .sub.p_m {width: 76.47059%;}
            .home_section_1_2 figcaption .sub.p_m {color: #ffffff;opacity: 0;transform: translateY(-3vw) translateZ(0px);-webkit-transition: all ease-in-out 750ms;-moz-transition: all ease-in-out 750ms;-ms-transition: all ease-in-out 750ms;-o-transition: all ease-in-out 750ms;transition: all ease-in-out 750ms;}
            .home_section_1_2 figcaption .sub.p_m.isactive {opacity: 1;transform: translateY(0vw) translateZ(0px);}

            .home_section .home_section_btn {margin-top: 2.43056vw;}
            .home_section .home_section_btn {transform: translateY(-100%) translateZ(0px);opacity: 0;-webkit-transition: all ease-in-out 750ms;-moz-transition: all ease-in-out 750ms;-ms-transition: all ease-in-out 750ms;-o-transition: all ease-in-out 750ms;transition: all ease-in-out 750ms;}
            .home_section .home_section_btn.isactive {transform: translateY(0vw) translateZ(0px);opacity: 1;}
            .home_section_btn a {font-size: .69444vw;height: 3.71528vw;padding-left: 2.60417vw;padding-right: 2.60417vw;color: #fff;webkit-transition: opacity 1s cubic-bezier(.26,1.04,.54,1),color 1s cubic-bezier(.26,1.04,.54,1);-o-transition: opacity 1s cubic-bezier(.26,1.04,.54,1),color 1s cubic-bezier(.26,1.04,.54,1);transition: opacity 1s cubic-bezier(.26,1.04,.54,1),color 1s cubic-bezier(.26,1.04,.54,1);cursor: pointer;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;font-weight: 700;z-index: 0;position: relative;white-space: nowrap;width: fit-content;text-transform: uppercase;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-pack: center;-ms-flex-pack: center;}
            .home_section_btn a:after {border-radius: 3.71528vw;}
            .home_section_btn a:hover {color: #000000;-webkit-transition-duration: .3s;-o-transition-duration: .3s;transition-duration: .3s;}
            .home_section_btn a:hover:after {background: #fff;-webkit-transition-duration: .3s;-o-transition-duration: .3s;transition-duration: .3s;}

            .home_video_wrapper {display: block;z-index: 0;width: 65%;}
            .home_video_wrapper,.home_video {position: absolute;top: 0;left: 0;height: 100%;}
            .home_video {z-index: 1;width: 37.5vw;height: 60vh;visibility: hidden;}
            .home_video.is-active {visibility: inherit;width: 100%;height: 100%;}
            .home_video.home_video_down.is-active {width: 37.5vw;height: 60vh;}



        }





</style>
<body style="background: #f0f0f0">

    <div class="header">
	    <div class="header1">
	        <div class="nav-container">
	            <div class="logo"><a href="index.html"><img src="images/common/logo-top-white.png" alt="" width="155"></a></div>
	            <a href="javascript:;">
	                <div class="left-header mshow">
	                    <div class="navbar">
	                        <span class="nav"></span>
	                        <span class="nav"></span>
	                        <span class="nav"></span>
	                    </div>
	                    <div class="search nav-item">
	                        <!--<img src="images/icon-search.png" alt="">-->
	                        <i class="iconfont icon-iconsearch"></i>
	                        <span>SEARCH</span>
	                    </div>
	                </div>
	            </a>
	            <a href="javascript:;">
	                <div class="right-header mshow">
	                    <div class="nav-item">
	                        <a href="eight.html">
	                            <i class="iconfont icon-fenlei"></i>
	                            <!--<img src="images/icon-brands.png" alt="">-->
	                            <span>八大空间</span>
	                        </a>
	
	                    </div>
	                    <div class="nav-item">
	                        <a href="join.html">
	                            <i class="iconfont icon-lock"></i>
	                            <!--<img src="images/icon-stock.png" alt="">-->
	                            <span>加盟合作</span>
	                        </a>
	
	                    </div>
	                </div>
	            </a>
	            <div class="nav-item close mhidden">
	                <img src="images/icon-close.png" alt="">
	                <span>CLOSE</span>
	            </div>
	
	        </div>
	    </div>
	
	    <div class="header2">
	        <div class="nav-container">
	            <div class="logo"><a href="index.html"><img src="images/common/logo-top-white.png" alt="" width="155"></a></div>
	            <a href="javascript:;">
	                <div class="left-header mshow">
	                    <div class="navbar">
	                        <span class="nav"></span>
	                        <span class="nav"></span>
	                        <span class="nav"></span>
	                    </div>
	                    <div class="search nav-item">
	                        <!--<img src="images/icon-search.png" alt="">-->
	                        <i class="iconfont icon-iconsearch"></i>
	                        <span>SEARCH</span>
	                    </div>
	                </div>
	            </a>
	            <div class="nav_t nav_t1">
	                <ul class="clearfix">
	                    <li>
	                        <a href="index.html">首页</a>
	                    </li>
	                    <li>
	                        <a href="brand.html">走进宝仕龙</a>
	                        <div class="header2-comboBox">
	                            <a href="brand.html" class="comboBox-list">走进宝仕龙</a>
	                            <a href="brand.html" class="comboBox-list">品牌文化</a>
	                            <a href="topshop.html" class="comboBox-list">工厂1号店</a>
	                            <a href="museum.html" class="comboBox-list">吊顶博物馆</a>
	                        </div>
	                    </li>
	                    <li>
	                        <a href="eight.html">定制生活馆</a>
	                        <div class="header2-comboBox">
	                            <a href="eight.html"  class="comboBox-list">生活DIY</a>
	                            <!-- <a href="javascript:;" class="comboBox-list" >设计理念</a> -->
	                            <a href="live_museum.html" class="comboBox-list">百套案例</a>
	                            <a href="live_museum.html" class="comboBox-list">万城万景</a>
	                            <a href="remould.html" class="comboBox-list">旧屋改造</a>
	                        </div>
	                    </li>
	                    <li>
	                        <a href="news.html" >新闻中心</a>
	                        <div class="header2-comboBox">
	                            <a href="news.html"  class="comboBox-list">企业新闻</a>
	                            <a href="news.html"  class="comboBox-list">市场新闻</a>
	                            <a href="news-video.html"  class="comboBox-list">企业视频</a>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	            <div class="nav_t nav_t2">
	                <ul class="clearfix">
	                    <li>
	                        <a href="javascript:;" >品牌见证</a>
	                        <div class="header2-comboBox">
	                            <a href="brandWitness1.html" class="comboBox-list">设计师</a>
	                            <a href="cooperation.html" class="comboBox-list">大咖品推官</a>
	                            <a href="say.html" class="comboBox-list">TA有话说</a>
	                        </div>
	                    </li>
	                    <li>
	                        <a href="service.html" >服务中心</a>
	                        <div class="header2-comboBox">
	                            <a href="service.html#customer" class="comboBox-list">客服中心</a>
	                            <a href="service.html#need" class="comboBox-list">客户中心</a>
	                            <a href="contact.html" class="comboBox-list">我要反馈</a>
	                        </div>
	                    </li>
	                    <li>
	                        <a href="join.html" >招商合作</a>
	                        <div class="header2-comboBox">
	                            <a href="join.html"  class="comboBox-list">加盟共赢</a>
	                            <a href="franchisee.html"  class="comboBox-list">加盟流程</a>
	                            <a href="cooperate-people.html"  class="comboBox-list">商学院</a>
	                            <a href="pos.html"  class="comboBox-list">大商样板</a>
	                            <a href="live-grid-sketch.html"  class="comboBox-list">大单分享</a>
	                        </div>
	                    </li>
	                    <li>
	                        <a href="contact.html" >联系我们</a>
	                        <div class="header2-comboBox">
	                            <a href="recruit.html"   class="comboBox-list">招贤纳士</a>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	            <a href="javascript:;">
	                <div class="right-header mshow">
	                    <div class="nav-item">
	                        <a href="eight.html">
	                            <i class="iconfont icon-fenlei"></i>
	                            <!--<img src="images/icon-brands.png" alt="">-->
	                            <span>八大空间</span>
	                        </a>
	                    </div>
	                    <div class="nav-item">
	                        <a href="join.html">
	                            <i class="iconfont icon-lock"></i>
	                            <!--<img src="images/icon-stock.png" alt="">-->
	                            <span>加盟合作</span>
	                        </a>
	                    </div>
	                </div>
	            </a>
	            <div class="nav-item close mhidden">
	                <img src="images/icon-close.png" alt="">
	                <span>CLOSE</span>
	            </div>
	
	        </div>
	    </div>
	</div>
    <!--wrapper-->
    <!--container-->
    <!--content-->
    <div class="main" id="luxy">

        <div class="section section-banner">

            <div class="swiper-container">
                <div class="swiper-wrapper">
                	<!--<div class="swiper-slide">-->
                 <!--       <div class="background-image" style="background-image:url(images/mmbanner-00.jpg);"></div>-->
                 <!--   </div>-->
                	<div class="swiper-slide">
                        <div class="background-image" style="background-image:url(images/mmbanner-01.jpg);" id="banner1"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="background-image" style="background-image:url(images/mbanner-01.jpg);" id="banner2"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="background-image" style="background-image:url(images/mbanner-02.jpg);" id="banner3"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="background-image" style="background-image:url(images/mbanner-03.jpg);" id="banner4"></div>
                    </div>
                </div>

                <div class="hero-slider-content">
                    <div class="text-slide-container">
                        <div class="flickity-viewport">
                            <div class="flickity-slider" style="transform: translateX(3.75%)">
                                <div class="text-slider">
                                    <div class="text-slider-caption uppercase" id="sub_title1">LIGHTING</div>

                                    <div class="link-editor-wrapper">
                                        <p>
                                            <a href="javascript:;" class="uppercase" id="title1">Blending</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text-slider">
                                    <div class="text-slider-caption uppercase" id="sub_title2">LIGHTING</div>

                                    <div class="link-editor-wrapper">
                                        <p>
                                            <a href="javascript:;" class="uppercase" id="title2">Blending</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="text-slider">
                                    <div class="text-slider-caption uppercase">
                                        <div class="text-slider-caption uppercase" id="sub_title3">LIGHTING</div>
                                        <div class="link-editor-wrapper">
                                            <p>
                                                <a href="javascript:;" class="uppercase" id="title3">symbiosis</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-slider">
                                    <div class="text-slider-caption uppercase">
                                        <div class="text-slider-caption uppercase" id="sub_title4">LIGHTING</div>
                                        <div class="link-editor-wrapper">
                                            <p>
                                                <a href="javascript:;" class="uppercase" id="title4">born by beauty</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-slider-line">
                        <div class="line-active"></div>
                    </div>
                </div>

                <div class="swiper-navigation">
                    <div class="navigation-item prev">previous</div>
                    <div class="navigation-separator"></div>
                    <div class="navigation-item next">next</div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div style="width: 100vw;">
            <div style="width: 95%;max-width: 1550px;margin: 8vh auto;display: flex;flex-wrap: wrap">
                <div style="min-width: 550px;flex: 1;padding-right: 5vw;">
                    <h3 style="font-size: 36px;line-height: 46px;color: #333333;">Brand <br>
                        Traceability <span style="font-size: 26px;line-height: 46px;color: #000000;">品牌溯源</span>
                    </h3>
                    <h5 style="font-size: 24px;color: #000000;margin: 4.8vh 0;">定制吊顶发明者  定制吊顶行业创始企业</h5>
                    <div style="font-size: 16px;line-height: 1.75;text-indent: 1.8em;text-align: justify">
                        <p>宝仕龙集成家居创立于2006年，坐落于浙江海盐68000㎡的智能产业园，是集成吊顶创始企业之一，更是集成吊顶产业集群中的重点企业。旗下拥有宝仕龙、索菲尼洛双品牌，秉承让家更美、生活更美好的使命，为全国用户定制个性化的家居生活。</p>
                        <p>宝仕龙连续9年蝉联集成吊顶行业十大领军品牌，并荣获“集成吊顶国家标准起草单位”、“集成吊顶行业标准参编单位、中国集成吊顶行业副会长单位、国家高新技术企业、浙江省专利示范企业”等108项荣誉，并拥有319项自主专利技术，853家全国营销网点。互联网大数据时代，宝仕龙实行拼搏、实干、创新、必达的企业精神，正在实现新的创新变革。</p>
                    </div>
                    <span style="width: 310px;height: 45px;line-height: 45px;text-align: center;color: #787878;font-size: 14px;text-indent: 1px;display: inline-block;border: 1px solid #676767;margin-top: 4.8vh;">查看更多</span>
                </div>
                <div>
                    <div style="position: relative;top: 50%;transform: translateY(-50%);margin: 0 6vw">
                        <img style="width: 100%;max-width: 390px;margin-bottom: 8vh;" src="./images/mbsllogo0.png" alt="">
                        <img style="width: 100%;max-width: 390px" src="./images/mbsllogo1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="main2 is-active">
            <div class="home_section home_section_1_1 is-active">
                <div class="home_section_model_left">
                    <div class="home_section_model_count isactive">
                        <div class="number_wrapper isactive">
                            <span class="number">1</span><span class="sep isactive"><u></u></span><span class="number">2</span>
                        </div>
                    </div>
                </div>
                <figure class="home_section_figure">
                    <div class="media_wrapper isactive" style="">
                        <div class="media">
                            <picture class="lazy r" data-object-fit="cover" style="padding-bottom: 100%; opacity: 1; transform: scaleY(1) translateY(0%) translateZ(0px);">
                                <source type="image/jpg" media="(max-width: 820px)" srcset="http://mode.pstldz.com/img_fty/mypic.jpg 300w, http://mode.pstldz.com/img_fty/mypic.jpg 600w">
                                <img class="lazy loaded" srcset="http://mode.pstldz.com/img_fty/mypic.jpg 800w, http://mode.pstldz.com/img_fty/mypic.jpg 400w, http://mode.pstldz.com/img_fty/mypic.jpg 1600w" src="http://mode.pstldz.com/img_fty/mypic.jpg" data-was-processed="true">
                            </picture>
                        </div>
                    </div>
                    <figcaption class="home_section_caption">
                        <h2 class="h_1" style="font-size: 3.5em;">
                            <span class="t_words isactive">
                                <span><span>东方</span></span>
                                <span><span>美学</span></span>
                                <br>
                                <span><span>雅奢</span></span>
                                <span><span>生活</span></span>
                            </span>
                        </h2>
                        <p class="sub p_m" style="width: 100%;">
                        <span class="t_words isactive">
                            <span><span>成为创造高品质家居的典范企业</span></span>
                            <!--<span><span></span></span>-->
                            <!--<span><span></span></span>-->
                            <!--<span><span></span></span>-->
                            <!--<span><span></span></span>-->
                            <!--<span><span></span></span>-->
                            <!--<span><span></span></span>-->
                            <!--<span><span>构建</span></span>-->
                            <!--<span><span>你的</span></span>-->
                            <!--<span><span>梦想</span></span>-->
                            <!--<span><span>的家</span></span>-->
                            <!--<span><span>在</span></span>-->
                            <!--<span><span>一个</span></span>-->
                            <!--<span><span>价格</span></span>-->
                            <!--<span><span>，</span></span>-->
                            <!--<span><span>你</span></span>-->
                            <!--<span><span>能</span></span>-->
                            <!--<span><span>负担的起。</span></span>-->
                        </span>
                        </p>
                        <div class="home_section_btn isactive">
                            <a href="javascript:;">
                                查找您的理想房屋
                            </a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="home_section home_section_1_2">
                <div class="home_section_model_left">
                    <div class="home_section_model_count">
                        <div class="media_wrapper" style="">
                            <div class="media">
                                <picture class="lazy r" data-object-fit="cover" style="padding-bottom: 100%; opacity: 1; transform: scaleY(1) translateY(0%) translateZ(0px);">
                                    <source type="image/jpg" media="(max-width: 820px)" srcset="https://connect-homes.com/wp-content/uploads/2020/02/ConnectShowcaseMarVista_12-300x300-c-center.jpg 300w, https://connect-homes.com/wp-content/uploads/2020/02/ConnectShowcaseMarVista_12-600x600-c-center.jpg 600w">
                                    <img class="lazy loaded" srcset="http://mode.pstldz.com/img_fty/mypic_800.jpg 800w, https://connect-homes.com/wp-content/uploads/2020/02/ConnectShowcaseMarVista_12-400x400-c-center.jpg 400w, http://mode.pstldz.com/img_fty/mypic_800.jpg 1600w" src="http://mode.pstldz.com/img_fty/mypic_800.jpg" data-was-processed="true">
                                </picture>
                            </div>
                        </div>
                        <div class="number_wrapper">
                            <span class="number">2</span><span class="sep"><u></u></span><span class="number">2</span>
                        </div>
                    </div>
                </div>
                <figure class="home_section_figure">
                    <figcaption class="home_section_caption">
                        <h2 class="h_1" style="font-size: 3.5em;">
                        <span class="t_words">
                            <span><span>"人·物·居"</span></span>
                            <span><span>相融共生</span></span>
                            <br>
                            <span><span>全景顶</span></span>
                            <span><span>因美而生</span></span>
                        </span>
                        </h2>
                        <p class="sub p_m">
                            坚持原创之美，营造家居设计之美，传达艺术生活理念
                        </p>
                        <div class="home_section_btn ">
                            <a href="javascript:;">
                                了解详情
                            </a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="home_video_wrapper" style="    opacity: 1;">
                <video class="home_video home_video_down is-active" preload="none" playsinline muted data-object-fit="cover">
                    <!--<source src="media/home-in.webm" type="video/webm">-->
                    <source src="banners3.mp4" type="video/webm">
                    <!--<source src="./media/home-in2.mp4" type="video/webm">-->
                    <!--<source src="media/home-in.mp4" type="video/mp4">-->
                    <source src="banners3.mp4" type="video/mp4">
                </video>
                <video class="home_video home_video_up" preload="none" playsinline muted data-object-fit="cover">
                    <!--<source src="media/home-out.webm" type="video/webm">-->
                    <!--<source src="./media/home-down2.mp4" type="video/webm">-->
                    <source src="banners3.mp4" type="video/webm">
                    <!--<source src="media/home-out.mp4" type="video/mp4">-->
                    <source src="banners3.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="section section3 idx_section2">
            <div class="ban ban2" style="overflow: hidden;max-height: unset"  >
                <img src="images/banner-02.jpg" style="visibility: inherit;" data-bottom-top="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -211.844, 0, 1);" data-top-bottom="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 212.949, 0, 1);"  alt="" class="logo-img">
            </div>
            <div class="section_i2" data-bottom-top="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -183.468, 0, 1);" data-top-bottom="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0,33.7142, 0, 1);">
                <p class="txt03">
                    PANORAMIC ROOF
                </p>
            </div>
            <div class="box02">
                <div class="vessel ">
                    <div class="main01 mousein1">
                        <div class="scrollBlock01">
                            <div class="scrollTxt01">
                                    SCROLL DOWN
                                </div>
                                <div class="scrollLine01">
                                </div>
                        </div>
                        <div class="tag01">EIGHT SPACES IN THE WHOLE HOUSE</div>
                        <div class="tag02">全屋八大空间</div>
                        <div class="tag03">随着国家装配式装修政策的大力执行，精装修时代的到来，追求设计和品质的消费群体不断增多，传统石膏吊顶开裂脱落，易受潮发霉，已无法满足人们日益增长的双重需求。
历经多年研发攻关，2019年“定制吊顶”震撼上市。<br />定制吊顶以铝为原基材，采用柔性定制一体化设计，实现空间定制、风格定制、功能定制、色彩定制、尺寸定制等多样个性化定制，完美呈现石膏板任意造型，1:1还原设计效果，达到顶部空间的专属定制方案。
                        </div>
                        <div class="midx-box2-content">
                            <ul>
                                <li>
                                	<a href="eight.html">
                                    <img src="./images/idx-icon-kt.png" alt="">
                                    <p>客厅</p>
                                    </a>
                                </li>
                                <li>
                                    <img src="./images/idx-icon-ct.png" alt="">
                                    <p>餐厅</p>
                                </li>
                                <li>
                                    <img src="./images/idx-icon-cf.png" alt="">
                                    <p>厨房</p>
                                </li>
                                <li>
                                    <img src="./images/idx-icon-ys.png" alt="">
                                    <p>卫浴</p>
                                </li>
                                <li>
                                    <img src="./images/idx-icon-ws.png" alt="">
                                    <p>卧室</p>
                                </li>
                                <li>
                                    <img src="./images/idx-icon-sf.png" alt="">
                                    <p>书房</p>
                                </li>
                                <li>
                                    <img src="./images/idx-icon-gd.png" alt="">
                                    <p>过道</p>
                                </li>
                                <li>
                                    <img src="./images/idx-icon-yt.png" alt="">
                                    <p>阳台</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="eight.html" class="slid01 mousein">
                        <p class="txt04">MORE</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="section section4">
            <div class="ban ban3"style="max-height: unset;overflow: hidden;">
                <img src="images/banner-03.jpg" alt="" style="visibility: inherit;" class="logo-img" data-bottom-top="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -161.844, 0, 1);" data-top-bottom="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 212.949, 0, 1);" >
            </div>
            <div class="section_i3" data-bottom-top="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, -161.844, 0, 1);" data-top-bottom="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 212.949, 0, 1);"  >
                <p class="txt05">
                    PRODUCT CONCEPT
                </p>
            </div>
            <div class="box02">
                <div class="vessel ">
                    <div class="main01 mousein1">
                        <div class="scrollBlock01">
                            <div class="scrollTxt01">
                                    SCROLL DOWN
                                </div>
                                <div class="scrollLine01">
                                </div>
                        </div>
                        <div class="tag01">Custom ceiling will not be replaced for 30 years</div>
                        <div class="tag02">定制吊顶30年不用换</div>
                        <div class="tag03">1.高级私人定制：定制吊顶更注重私人量身定制设计，相比流水生产的模块化集成吊顶，定制吊顶个人风格强烈、整体性更强，根据用户的喜好，设计师量身设计，1:1还原理想家；<br />
2.	防水防裂防霉变：定制吊顶经久耐用，不发霉不发黄不脱落不开裂，不怕潮湿梅雨季节困恼；<br />
3.	绿色环保无甲醛：定制吊顶以原生铝为基材，无甲醛污染，健康环保；<br />
4.	可回收再利用：减少建筑垃圾对环境的危害，回收利用率高；<br />
5.	抗油污易清洁：表面纳米超疏水技术，抗油污，可擦洗，即擦即净，打扫无忧。<br />
6.	安装周期短：工厂量身定制生产，安装现场装配式组装，全屋施工只需3天（因复杂程度而言），大大缩短工期，即装即住；<br />
7.	使用寿命长：定制吊顶是全铝合金定制，QE吊装系统安装，表面经过纳米抗油污处理，背面经过耐腐蚀处理，30年不用换。

                        </div>
                    </div>
                    <a href="brandWitness.html" class="slid01 mousein">
                        <p class="txt04">MORE</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="section section5">
            <ul>
                <li>
                    <a href="brand.html"class="brand mousein ">
                        <img src="images/banner-04.jpg">
                        <p class="section5-txt01">CORPORATE CULTURE</p>
                        <p class="section5-txt02">企业文化</p>
                    </a>
                </li>
                <li>
                    <a href="live_museum.html"class="si mousein">
                        <img src="images/banner05.jpg" alt="" >
                        <p class="section5-txt01">SI TRMINAL IMAGE</p>
                        <p class="section5-txt02">SI终端形象</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="mutual on">
        <ul class="list">
            <li>
                <a href="javascript:;">
                    <div class="mutualIco">
                        <img src="images/ico2.png" alt="">
                        <div class="mutualIco-text">在线咨询</div>
                    </div>

                    <span class="txt1">
    		            扫描二维码与销售顾问咨询
    		            <img src="images/common/r-wx.jpg" alt="">
    		        </span>
                </a>
            </li>
            <li>
                <a target="_blank"  class="vid-play-btn">
                    <div class="mutualIco">
                        <img src="images/ico3.png" alt="">
                        <div class="mutualIco-text">免费量房</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="mutualIco">
                        <img src="images/ico1.png" alt="">
                        <div class="mutualIco-text">电话咨询</div>
                    </div>
                    <span class="txt1">400-887-7831 / 0573-86788519</span>
                </a>
            </li>
            <li class="backtoTop">
                <a href="javascript:;">
                    <div class="mutualIco">
                        <img src="images/ico4.png" alt="">
                        <div class="mutualIco-text">top</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="footer">
        <div class="footer-top">
            <div class="top-list">
                <div class="top-item">
                    <img src="images/ico01.png" alt="">
                    <div class="top-item-txt">
                        防伪查询
                    </div>
                </div>
                <div class="top-item">
                    <img src="images/ico02.png" alt="">
                    <div class="top-item-txt">
                        帮助中心
                    </div>
                </div>
                <div class="top-item">
                    <img src="images/ico05.png" alt="">
                    <div class="top-item-txt">
                        天猫官方直营店
                    </div>
                </div>
                <div class="top-item">
                    <img src="images/ico04.png" alt="">
                    <div class="top-item-txt">
                        宝仕龙商城
                    </div>
                </div>
                <div class="top-item backtoTop">
                    <img src="images/ico5.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer-center">
            <div class="footer-center-left">
                <div class="footer-center-left-list">
                    <div class="footer-center-left-item">
                        <a href="index.html" >首页</a>
                    </div>
                    <div class="footer-center-left-item">
                        <a href="brand.html" >走进宝仕龙</a>
                        <a href="brand.html" >品牌文化</a>
                        <a href="javascript:;" >工厂1号店</a>
                        <a href="museum.html" >吊顶博物馆</a>
                    </div>
                    <div class="footer-center-left-item">
                        <a href="eight.html" >定制生活馆</a>
                        <a href="eight.html" >生活DIY</a>
                        <a href="live_museum.html">百套案例</a>
                        <a href="live_museum.html">万城万景</a>
                        <a href="remould.html">旧屋改造</a>
                    </div>
                    <div class="footer-center-left-item">
                        <a href="news.html" >新闻中心</a>
                        <a href="news.html" >企业新闻</a>
                        <a href="news.html" >市场新闻</a>
                    </div>
                    <div class="footer-center-left-item">
                        <a href="javascript:;" >品牌见证</a>
                        <a href="javascript:;" >设计师</a>
                        <a href="cooperation.html" >大咖品推官</a>
                        <a href="say.html" >TA有话说</a>
                    </div>
                    <div class="footer-center-left-item">
                        <a href="service.html" >服务中心</a>
                        <a href="service.html#customer" >客服中心</a>
                        <a href="service.html#need" >客户中心</a>
                        <a href="contact.html" >我要反馈</a>
                    </div>
                    <div class="footer-center-left-item">
                        <a href="join.html" >招商合作</a>
                        <a href="join.html" >加盟共赢</a>
                        <a href="cooperate-people.html" >商学院</a>
                        <a href="pos.html" >大商样板</a>
                        <a href="live-grid-sketch.html" >大单分享</a>
                    </div>
                    <div class="footer-center-left-item">
                        <a href="contact.html" >联系我们</a>
                        <a href="productSearch.html" >防伪查询</a>
                    </div>
                </div>
            </div>
            <div class="footer-center-right">
                <div class="footer-center-txt1">关注我们</div>
                <div class="footer-center-txt2">全国客服电话</div>
                <div class="footer-center-txt3">400-8877-831</div>
                <div class="footer-center-txt4">邮箱：sales@jxbsl.com</div>
                <div class="footer-center-txt5">
                    <img src="images/wb.png" alt="">
                    <img src="images/wx.png" alt="">
                </div>
            </div>
        </div>
        <div class="bottom">
            <p class="bottom-p">COPYRIGHTS 2020 BOSLON AL RIGHTS RESERVED. 浙ICP备09002255号-1    技术支持：PERSONAL TAILOR </p>
        </div>
    </div>
    <div id="move"></div>
    <div class="popup-section popup-navigation">
        <div class="popup-container">
            <div class="navigation-left">
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="index.html">
                            <span>首页</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="brand.html">
                            <span>走进宝仕龙</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="brandWitness.html">
                            <span>品牌见证</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="eight.html">
                            <span>八大空间</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="live_museum.html">
                            <span>形象厅</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="pos.html">
                            <span>大商样板</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="cooperate-people.html">
                            <span>商学院</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="contact.html">
                            <span>联系我们</span>
                        </a>
                    </div>
                </div>
                <div class="navigation-item">
                    <div class="navigation-span">
                        <a href="productSearch.html">
                            <span>防伪查询</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="navigation-right">

                <div class="navigation-add">
                    <div class="navigation-add-line"></div>
                    <div class="address">
                        Jl. Duren Tiga Raya No. 33<br>
                        Jakarta Selatan - 12760 <br>
                        Indonesia
                    </div>
                    <p></p>
                    +62 21 799 1521
                    <br>
                    +62 21 722 5003
                    <br>
                    info@prodotti-id.com
                    <p></p>
                    <div class="socials">
                        <div class="icon">
                            <a href="javascript:;">
                                <img src="images/logo-facebook.svg" alt="">
                            </a>
                        </div>
                        <div class="icon">
                            <a href="javascript:;">
                                <img src="images/logo-instagram.svg" alt="">
                            </a>
                        </div>
                        <div class="icon">
                            <a href="javascript:;">
                                <img src="images/logo-youtube.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="navigation-add">
                    <div class="navigation-add-line"></div>
                    <div>
                        Monday - Friday<br>
                        09.00 A.M - 06.00 P.M<br><p></p>
                        Saturday - Sunday<br>
                        Appointment Only<br>
                    </div>
                    <div class="navigation-bottom">
                        <div class="navigation-bottom-item">
                            <a href="javascript:;">
                                <span>Privacy & Cookie Policy</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="popup-section popup-search">

        <div class="popup-container">
            <div class="search-form">
                <input type="text" placeholder="Search for Products, Brands or News" class="input-form" style="width: 0;">
                <div class="search-result">
                    <div class="search-result-item"></div>
                    <div class="search-result-item"></div>
                    <div class="search-result-item"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="popup-brand">
        <div class="brand-list">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <div class="slider-image">
                                <div class="background-image" style="background-image: url('images/brand_swiper_01.jpg')"></div>
                            </div>
                            <div class="slider-title">Alexander Lamont</div>
                            <div class="slider-hr"></div>
                            <div class="slider-category">Furniture</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <div class="slider-image">
                                <div class="background-image" style="background-image: url('images/brand_swiper_02.jpg')"></div>
                            </div>
                            <div class="slider-title">Alexander Lamont</div>
                            <div class="slider-hr"></div>
                            <div class="slider-category">Furniture</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;">
                            <div class="slider-image">
                                <div class="background-image" style="background-image: url('images/brand_swiper_01.jpg')"></div>
                            </div>
                            <div class="slider-title">Alexander Lamont</div>
                            <div class="slider-hr"></div>
                            <div class="slider-category">Furniture</div>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/commen.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper.animate1.0.3.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/iconfont.js"></script>
    <script src="js/skrollr.js"></script>
    <script>
        // $('body,html').animate({scrollTop:0},750)
        var s = skrollr.init({
            forceHeight:false,
            mobileDeceleration:0.08
        });

        document.onmousemove=function(even)
        {
            var oDiv=document.getElementById('move');
            var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
            var scrollLeft=document.documentElement.scrollLeft||document.body.scrollLeft;
            var oEvent=even||event;
            oDiv.style.top = (oEvent.clientY-(oDiv.offsetHeight/2))+"px";
            oDiv.style.left=(oEvent.clientX-(oDiv.offsetWidth/2))+"px";
            let dom = $('#move');
            $('.mousein').on('mouseenter',function () {
                dom.css({"height":"50px","width":"50px","border":" 2px solid #797979"});
            })
            $('.mousein').on('mouseleave',function () {
                dom.css({"height":"20px","width":"20px","border":" 1px solid #5f5f5f"});
            })
            let dom1 = $('#move');
            $('.mousein1').on('mouseenter',function () {
                dom1.css({"height":"50px","width":"50px","border":" 2px solid #000"});
            })
            $('.mousein1').on('mouseleave',function () {
                dom1.css({"height":"20px","width":"20px","border":" 1px solid #5f5f5f"});
            })
        }
        $(window).scroll(function(){
            if($(window).scrollTop() >950){
                $(".line").css("background","#000");
                $(".line-box").hover(function(){
                    $(".line").css("background-color","#fff");
                });
            }else{
                $(".line").css("background","#fff");
            }
        })
        let target = true;
        let video_target = true;
        let now_idx =0;
        $(function () {
            setTimeout(function () {
                $('.home_video_down').trigger('play');
                $('.home_video_up').trigger('play');
                $('.home_video_down').trigger('pause');
                $('.home_video_up').trigger('play');
            })
            $('.home_video_down')[0].currentTime=0.0;

            $('body .main2')[0].addEventListener('wheel', function (e) {
                var delta = e.deltaY;
                console.log(delta)
                if (delta < 0) {
                    // 向上滚
                    if (target && now_idx != 0) {
                        target = false;

                        // if ($(document).scrollTop() > $('.main2').offset().top) {
                            $('body,html').animate({
                                scrollTop: $('.main2').offset().top
                            }, 750)
                        // }
                        $('.home_video_up').addClass('is-active');
                        $('.home_video_down').removeClass('is-active');

                        // translateX(44%) scaleX(1) scaleY(1) translateY(-50%) translateZ(0px) scale(0.56)
                        if (now_idx == 1) {
                            now_idx--;
                            $('.home_video_up').trigger('play');
                            $('.home_video_down')[0].currentTime = 0
                            $('.home_video_up')[0].addEventListener('timeupdate', function video2(e) {
                                if ($('.home_video_up')[0].currentTime >= 6.5 && video_target) {
                                    target = true;
                                    $('.home_video_up').trigger('pause');
                                    $('.home_video_up')[0].removeEventListener('timeupdate', video2)
                                    $('.home_video_down').addClass('is-active');
                                    $('.home_video_up')[0].currentTime = 0.00;
                                    $('.home_video_up').removeClass('is-active');
                                }
                                // 6.13
                                // $(this).removeEventListener('timeupdate')
                            });
                            $('.home_section_1_2 .number_wrapper .sep').removeClass('isactive');
                            setTimeout(function () {
                                $('.home_section_1_1').addClass('is-active');
                                $('.home_section_1_2 figcaption .sub.p_m').removeClass('isactive')
                                $('.home_section_1_2 .t_words').removeClass('isactive');
                                $('.home_section_1_2 .home_section_btn').removeClass('isactive')
                                $('.home_section_1_1 .media_wrapper').addClass('isactive')
                                $('.home_section_1_2 .media_wrapper').removeClass('isactive')
                                $('.home_section_1_1 .media_wrapper').find('picture').slideDown(1500);
                                $('.home_section_1_1 .home_section_model_count').addClass('isactive')
                                $('.home_section_1_2 .home_section_model_count').removeClass('isactive')
                                $('.home_section_1_2 figcaption .sub.p_m').removeClass('isactive')
                                $('.home_section_1_2 .number_wrapper').removeClass('isactive');
                                setTimeout(function () {
                                    $('.home_section_1_1 .t_words').addClass('isactive');
                                    $('.home_section_1_1 figcaption .sub.p_m').addClass('isactive')
                                    $('.home_section_1_1 .home_section_btn').addClass('isactive');
                                    $('.home_section_1_1 .number_wrapper .sep').addClass('isactive')
                                    setTimeout(function () {
                                        $('.home_section_1_1 .number_wrapper').addClass('isactive');
                                    }, 750)

                                    setTimeout(function () {
                                        $('.home_section_1_2').removeClass('is-active')
                                    }, 800)
                                }, 750)
                                $('.home_video_down ').animate({
                                    width:'37.5vw',
                                    height:'60vh'
                                },1500)
                                $('.home_video_up').animate({
                                    width:'37.5vw',
                                    height:'60vh'
                                },1500)
                            }, 1750)
                        }
                    }
                } else if (delta > 0) {
                    // 向下滚
                    if (target && now_idx != 1) {
                        // if ($(document).scrollTop() <= $('.main2').offset().top) {
                            $('body,html').animate({
                                scrollTop: $('.main2').offset().top
                            }, 750)
                        // }
                        target = false;
                        $('.home_video_down').addClass('is-active');
                        $('.home_video_up').removeClass('is-active');
                        // translateX(44%) scaleX(1) scaleY(1) translateY(-50%) translateZ(0px) scale(0.56)
                        if (now_idx == 0) {
                            now_idx++;
                            // 视频部分
                            // $('.home_video_down')[0].currentTime=2.29
                            $('.home_video_down').trigger('play');
                            $('.home_video_down,.home_video_up').animate({
                                width:'100%',
                                height:'100%'
                            },1500)
                            $('.home_video_down')[0].addEventListener('timeupdate', function video(e) {
                                if ($('.home_video_down')[0].currentTime >= 6.7 && video_target) {
                                    // video_target=false;
                                    target = true;
                                    $('.home_video_down').trigger('pause');
                                    $('.home_video_down')[0].removeEventListener('timeupdate', video)
                                    // $('.home_video_down')[0].currentTime = 3.85;
                                    $('.home_video_up')[0].currentTime = 0.0;
                                }
                                // 6.13
                                // $(this).removeEventListener('timeupdate')
                            });

                            // 内容部分
                            $('.home_section_1_1 .media_wrapper').removeClass('isactive')
                            $('.home_section_1_2 .media_wrapper').addClass('isactive')

                            $('.home_section_1_1 .t_words').removeClass('isactive');
                            $('.home_section_1_1 .home_section_btn').removeClass('isactive')
                            $('.home_section_1_1 .number_wrapper').addClass('isactive')
                            $('.home_section_1_1 .home_section_model_count').removeClass('isactive')
                            $('.home_section_1_2 .home_section_model_count').addClass('isactive')

                            $('.home_section_1_2').addClass('is-active');

                            // 数字1/3
                            $('.home_section_1_1 .number_wrapper .sep').removeClass('isactive');


                            setTimeout(function () {
                                $('.home_section_1_1 .number_wrapper').removeClass('isactive');

                                $('.home_section_1_2 figcaption .sub.p_m').addClass('isactive')
                                $('.home_section_1_2 .home_section_btn').addClass('isactive')
                                $('.home_section_1_2 .t_words').addClass('isactive');
                                $('.home_section_1_1 .media_wrapper').find('picture').slideUp(1500);
                                $('.home_section_1_2 .number_wrapper .sep').addClass('isactive')
                                setTimeout(function () {
                                    $('.home_section_1_2 .number_wrapper').addClass('isactive');
                                }, 750);

                                setTimeout(function () {
                                    $('.home_section_1_1').removeClass('is-active')
                                }, 1500)
                            }, 750)
                        }
                    }

                }
                if (target == false) {

                    e.preventDefault()
                }
                // }
            }, false)
        })

    </script>
    <script>
    	
    	$(function () {

            var swibanner = new Swiper('.section-banner .swiper-container',{
                speed: 1000,
                navigation: {
                    nextEl: '.swiper-navigation .next',
                    prevEl: '.swiper-navigation .prev',
                },
                pagination:{
                    el:'.section-banner .swiper-pagination',
                    clickable:true,
                    renderBullet: function (index, className) {
                        return '<div class="dot '+className+'"><span>0'+(index+1)+'</span></div>';
                    },
                },
                on: {
                    init:function () {
                        let idx = this.activeIndex;
                        let domarr = $('.section-banner .swiper-slide');
                        $('.text-slider-line .line-active').css({
                            width: ((idx+1)/domarr.length)*100+'%'
                        })
                        console.log($('.text-slider').eq(idx))
                        $('.text-slider').eq(idx).addClass('is-selected').siblings().removeClass('is-selected');
                        mytxt(idx)
                    },
                    slideChangeTransitionStart:function () {
                        let idx = this.activeIndex;
                        let domarr = $('.section-banner .swiper-slide');
                        $('.text-slider-line .line-active').css({
                            width: ((idx+1)/domarr.length)*100+'%'
                        })
                        mytxt(idx)
                    }
                }

            })

            var a = ($('.text-slider').eq(0).width()/$('.flickity-slider').width()).toFixed(2)*100
            var bantxtarr = $('.text-slider');
            var txt_x = 3.75;
            for(let i in bantxtarr){
                bantxtarr.eq(i).css({
                    left:(i*a)+'%'
                })
            }
            $('.text-slider').on('click',function () {
                swibanner.slideTo($(this).index())
                mytxt($(this).index())
            })
            $('.text-slider').on('mouseenter',function () {
                $('.swiper-slide').eq($(this).index()).addClass('hover')
            })
            $('.text-slider').on('mouseleave',function () {
                $('.swiper-slide').eq($(this).index()).removeClass('hover')
            })
            function mytxt(idx) {
                let mi = idx!=0?3.75:0;
                $('.flickity-slider').css({
                    transform: 'translateX('+(txt_x-(idx*a)-mi)+'%)'
                })
                $('.text-slider').eq(idx).addClass('is-selected').siblings().removeClass('is-selected')
            }


        })
    	
        
    </script>
</body>
</html>
