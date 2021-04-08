function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
        "SymbianOS", "Windows Phone",
        "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}
function rollpage (val,time) {
    $('body,html').animate({
        scrollTop: val,//将页面高度滚动至目标高度
    }, time);
}


$('.inside-banner').height($(window).height())
$(function () {
    if(true){
        $('.inside-banner').addClass('active')
    }
})
$(window).scroll(function(){
    if($(window).scrollTop() > $('.header').height() ){
        $('.header').addClass('cur')
    } else{
        $('.header').removeClass('cur')
    }
})
$('.header').on('mouseenter',function () {
    if(!$(this).hasClass('cur')){
        $(this).addClass('cur')
    }
})
$('.header').on('mouseleave',function () {
    if($(window).scrollTop() > $(this).height()){

    }else{
        $(this).removeClass('cur')
    }
})

$('.header').on('click','.left-header>div',function () {
    console.log($(this).parent().hasClass('mshow'))
    if($(this).parent().hasClass('mshow')){
        let that=this;

        $('.header .left-header').removeClass('mshow').addClass('mhidden').css({transform: 'translateY(-50px)',opacity: 0})
        $('.header .right-header').removeClass('mshow').addClass('mhidden').css({transform: 'translateY(-50px)',opacity:0})
        setTimeout(function () {
            $('.header').find('.nav-item.close').removeClass('mhidden').addClass('mshow').css({transform:'translateY(0)',opacity:1})
            if($(that).hasClass('search')){
                // 搜索按钮
                $('.popup-search').addClass('active')
                setTimeout(function () {
                    $('.popup-search .input-form').css({
                        width:'100%',
                    })
                },500)
            }else{
                // 导航按钮
                $('.popup-navigation').addClass('active')
                setTimeout(function () {
                    $('.popup-navigation .navigation-span').css({
                        top:0,
                    })
                },500)
            }
        },400)
    }
})
$('.header').on('click','.close',function () {
    if($(this).hasClass('mshow')){
        $('.header .close').removeClass('mshow').addClass('mhidden').css({transform:'translateY(20px)',opacity:0})
        if($('.popup-navigation').hasClass('active')){
            setTimeout(function () {
                $('.header .left-header').removeClass('mhidden').addClass('mshow').css({transform:'translateY(0)',opacity:1})
                $('.header .right-header').removeClass('mhidden').addClass('mshow').css({transform: 'translateY(0px)',opacity:1})
                $('.popup-navigation').removeClass('active')
                setTimeout(function () {
                    $('.popup-navigation .navigation-span').css({
                        top:0,
                    })
                },500)
            },400)
        }else if($('.popup-search').hasClass('active')){
            $('.popup-search .input-form').css({width:'0%',})
            setTimeout(function () {
                $('.header .left-header').removeClass('mhidden').addClass('mshow').css({transform:'translateY(0)',opacity:1})
                $('.header .right-header').removeClass('mhidden').addClass('mshow').css({transform: 'translateY(0px)',opacity:1})
                $('.popup-search').removeClass('active')
            },500)
        }else if($('.popup-brand').hasClass('active')){
            $('.popup-brand .brand-list').css({
                opacity:0,
                transform:'translateY(100%)'
            })
            setTimeout(function () {
                $('.popup-brand').removeClass('active')
                $('.header .left-header').removeClass('mhidden').addClass('mshow').css({transform:'translateY(0)',opacity:1})
                $('.header .right-header').removeClass('mhidden').addClass('mshow').css({transform: 'translateY(0px)',opacity:1})
            },500)
        }
    }
})


// 右侧返回顶部按钮
$('.backtoTop').on('click',function () {
    rollpage(0,800)
})

var host="http://www.mybsladmin.com/index/index";
var web_host="http://www.mybsladmin.com";
var ajaxpost = (function(url,data) {
    return new Promise(function (res, rej) {
      $.ajax({
        type: "POST",
        async: "false",
        url: host+url,
        dataType: "json",
        data: data,
        cache: false,
        headers: {
          Accept: "application/json; charset=utf-8"
        },
        success: function (data, status, xhr) {
            res(data)
        },
        error: function (err) {
          rej(err)
        }
      });
    })
  })
  
  var ajaxget = (function(url,data) {
    return new Promise(function (res, rej) {
      $.ajax({
        type: "GET",
        async: "false",
        url: host+url,
        dataType: "json",
        data: data,
        cache: false,
        contentType: false,
        headers: {
          Accept: "application/json; charset=utf-8"
        },
        success: function (data, status, xhr) {
            res(data)
        },
        error: function (err) {
            rej(err)
        }
      });
    })
  })