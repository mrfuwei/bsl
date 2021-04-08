var a1;

var mousesure = true;
$("#body3-switch-button-list").find(".swiper-slide").click(function() {

	var _index = $(this).index();
	$("#body3 .body-bkg").children("div").css({
		"opacity": "0",
	});
	setTimeout(function () {
		$('#body3 .body-bkg').children('div').eq(_index).siblings().css({display: 'none'})
	},400)
	$("#body3 .body-bkg").children("div").eq(_index).css({
		"opacity": "1",
		display:'block'
	});
})

$(document).ready(function() {
	$("#banner .Mask").css("transform", "translate(0%,-100%)");
	setTimeout(function() {
		$("#animationbox1 img").css("transform", "translate(0%,40%)")
	}, 1300)
	setTimeout(function() {
		$("#animationbox2").css("right", "0")
	}, 700)
	setTimeout(function() {
		$("#animationbox3").css("transform", "translate(0%,0%)")
	}, 1200)

})

$(".years-bar li").click(function() {
	var _index = $(this).index();
	$(".years-text li").removeClass("active");
	$(".years-bar li").removeClass("active");
	$(".years-bar li").eq(_index).addClass("active");
	$(".years-text li").eq(_index).addClass("active");
})


$(".banner-next-button").click(function(){

})