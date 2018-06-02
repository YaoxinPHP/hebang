$(function(){
	var Heit = $(window).height();
	$(".navs-t li").hover(function(){
		$(this).toggleClass("cur");
		$(this).children(".slup").stop(false,true).fadeToggle();
		});
	$(".menu").hover(function(){
		$(".clist").addClass("cur");
		$(".navs-t").show();
		},function(){
			$(".clist").removeClass("cur");
			$(".navs-t").hide();
			})
	$(".search span").click(function(){
		$(this).siblings().stop(false,true).slideToggle();
		})
	$(".pcks-don,.pcks-don li a").css({height:$(window).height()-70})
	$(".berls li:odd").css({float:"right"})
	$(".hover-S").hover(function(){
		$(this).toggleClass("cur");
		$(this).find(".con").stop(false,true).slideToggle();
		})
	$(".opoev").click(function(){
		$(".eprelt").stop(false,true).fadeIn();
		});
	$(".clospo").click(function(){
		$(".eprelt").stop(false,true).fadeOut();
		});
	$("#go-top").click(function(){
		$("html,body").animate({scrollTop:0});
		})
	
	
	
	
	
	
});

