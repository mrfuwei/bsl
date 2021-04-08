(function ($) {
        $.fn.numberRock = function (options) {
            var defaults = {speed: 1000, count: 100};
            var opts = $.extend({}, defaults, options);
            var div_by = 100, count = opts["count"], speed = Math.floor(count / div_by), sum = 0, $display = this,
                run_count = 1, int_speed = opts["speed"];
            var int = setInterval(function () {
                if (run_count <= div_by && speed != 0) {
                    $display.text(sum = speed * run_count);
                    run_count++;
                } else if (sum < count) {
                    $display.text(++sum);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }
    })(jQuery);
    var target=true;
    var target1=true;
    $(window).scroll(function(){
        if((($('.join-section1').offset().top - $(document).scrollTop())<$(window).height())&&target){
            target=false;
            $(".timer1").numberRock({
                speed:30,
                count:3000
            })
            $(".timer2").numberRock({
                speed:100,
                count:30
            })
        }
		if((($('.join-section6').offset().top - $(document).scrollTop())<$(window).height())&&target1){
		    target1=false;
			$(".timer3").numberRock({
			    speed:30,
			    count:30000000
			})
		    $(".timer4").numberRock({
		        speed:30,
		        count:29200000
		    })
		    $(".timer5").numberRock({
		        speed:30,
		        count:57000000
		    })
			$(".timer6").numberRock({
			    speed:30,
			    count:50000000
			})
		}
    })