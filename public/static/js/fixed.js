$('.vid-play-btn').on('click',function(){
	console.log(111)
			if( $(".measure-container.measure-common").css("display")=='none' ) {
				$('.measure-container.measure-common').css('display','block'); 
			}
		})
		$(document).click(function (e) {
			var $target = $(e.target);
			//点击表情选择按钮和表情选择框以外的地方 隐藏表情选择框
			if (!$target.is('.measure-container.measure-common *') && !$target.is('.vid-play-btn *')) {
				$('.measure-container.measure-common').hide();
			}
		});