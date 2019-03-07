$(function() {
	if (/msie (6.0|7.0|8.0)/i.test(navigator.userAgent)) {
		document.write('您的浏览器版本过低，此页面无法正常显示，请先升级浏览器！');
	}


	/****************************** 代码高亮 ******************************/
	try {
		hljs.configure({tabReplace: '	'});
		hljs.initHighlightingOnLoad();
		
		$('pre code').each(function() {
			$(this).text($(this).text().replace('\n', ''));
		});
	} catch (e) {}


	/****************************** 锚点滚动 ******************************/
	$.fn.anchorScroll = function(option) {
		return this.each(function() {
			var options = $.extend({
				fixed: 0,
				offset: 0
			}, {}, typeof option === 'object' && option);

			var $anchorMenu = $(this),
				$anchorItem = $anchorMenu.find('a'),
				pageIsScrolling = false;

			// 点击锚点时页面滚动
			$anchorItem.click(function(e) {
				e.preventDefault ? e.preventDefault() : e.returnValue = false;

				pageIsScrolling = true;

				try {
					var $target = $($(this).attr('href'));

					$('html, body').stop(true, false).animate({
						scrollTop: $target.offset().top + options.offset
					}, function() {
						pageIsScrolling = false;
					});

					$(this).addClass('active').siblings().removeClass('active');
				} catch (e) {}
			});

			$(window).on('scroll DOMContentLoaded load', function() {
				// 固定锚点菜单
				if ($(window).scrollTop() > options.fixed) {
					$anchorMenu.addClass('fixed').css({
						position: 'fixed',
						marginTop: 0,
						marginBottom: 0
					});
				} else {
					$anchorMenu.removeAttr('style').removeClass('fixed');
				}

				// 锚点菜单对应项添加高亮样式
				if (!pageIsScrolling) {
					$anchorItem.each(function() {
						try {
							var $target = $($(this).attr('href'));

							if ($(window).scrollTop() >= $target.offset().top + options.offset) {
								$(this).addClass('active').siblings().removeClass('active');
							} else {
								$(this).removeClass('active');
							}
						} catch (e) {}
					});
				}
			});
		});
	};


	/****************************** 判断元素是否在浏览器视口中 ******************************/
	$.fn.isInViewport = function(callback) {
	    var $this = $(this);
	 
	    $(window).on('scroll DOMContentLoaded load', function() {
	        $this.each(function() {
	            var elemTopToWindowTop = $(this).offset().top - $(window).scrollTop(),
	                elembottomToWindowTop = $(this).offset().top + $(this).outerHeight(true) - $(window).scrollTop();
	 
	            if (
	                (0 < elemTopToWindowTop && elemTopToWindowTop < $(window).height()) ||
	                (0 < elembottomToWindowTop && elembottomToWindowTop < $(window).height())
	            ) {
	                if ($(this).attr('in-viewport') === undefined) {
	                    callback.call(this);
	                    $(this).attr('in-viewport', '');
	                }
	            }
	        });
	    });
	};
});

$(function() {
	$('.side .anchor').anchorScroll({
		fixed: 0,
		offset: -10
	});

	$('#top').terseBanner();

	$('.container').isInViewport(function() {
		$(this).fadeTo('300', 1);
	});

	// 动画

	var animationDOM = $('#animation')[0].outerHTML;
	$('#animation').terseBanner({
		arrow: true,
		animation: 'fade'
	});

	$('.animation .select li').click(function() {
		$('.animation .select').trigger('mouseleave');

		var currentAnimation = $(this).text();

		if ($('.animation .select span').text() !== currentAnimation) {
			$('.animation .select span').text(currentAnimation);

			$('#animation').animate({
				left: '100%',
				opacity: 0
			}, function() {
				$(this).remove();
				$('.animation .select').after(animationDOM);
				$('#animation').terseBanner({
					arrow: true,
					animation: currentAnimation
				});
			});
		}
	});
});
