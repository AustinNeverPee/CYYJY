$(document).ready(function() {
	//导航栏下拉菜单
  $('.navigation li').hover(
    function () {
      $('.menu', this).fadeIn(50);
    }, 
    function () {
      $('.menu', this).fadeOut(50);   
    }
  );

	$(this).scroll(function() { // 页面发生scroll事件时触发 
		var bodyTop = 0; 
		if (typeof window.pageYOffset != 'undefined') { 
			bodyTop = window.pageYOffset; 
		} else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') { 
			bodyTop = document.documentElement.scrollTop; 
		} else if (typeof document.body != 'undefined') { 
			bodyTop = document.body.scrollTop; 
		} 

		var distance = 375 + $(".list li").length * 30;
		if (bodyTop > distance - 60)
			$("#subShortcuts").animate({top: 30 + bodyTop}, 100);
			//$("#subShortcuts").css("top", 50 + bodyTop);
		else
			//$("#subShortcuts").animate({top: distance}, "fast");
			$("#subShortcuts").css("top", distance);
	});

})
