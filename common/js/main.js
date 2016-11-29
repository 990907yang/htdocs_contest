$(document).ready(function(){
	/* fullpage */
	$("#fullpage").fullpage({
		sectionsColor: [ '#ddd', '#f5c032', '#185687', '#2ba8a8', '#2C3E50'],
		anchors: ['about', 'overview', 'features', 'case', 'contact'],
		menu: '#menu',
		scrollingSpeed: 800
	});

	window.onload = function(){
		$('.slide_wrap h2, .slide_wrap p').css({"opacity":1,"margin-bottom":"0"});
	}
    
	/* slide */
    var current = 0; max = $(".game_list li").length-1; width=1200;
    
	/* next function */
    function next(){
		if($(".game_list").is(":animated")){ return false;}
        if( current != max ){
            slide( ++current );
        }else{
            current=0;
            slide(0);
        }
    }
	/* prev function */
	function prev(){
		if($(".game_list").is(":animated")){ return false;}
        if( current != 0 ){
            slide(--current);
        }else{
            current=max;
            slide(max);
        }
    }
    $(".s2_sl_btnl").click(function(){
        prev();
    });
    $(".s2_sl_btnr").click(function(){
        next();
    });
	
    function slide(idx){
        $(".game_list").stop().animate({"left":-(idx*width)+"px"},300);
		$(".controls li").css({"background":"#ddd"});
		$(".controls li").eq(idx).css({"background":"#f5c032"});
    }
	
	$(".controls li").click(function(){
		$(this).css({"background":"#f5c032"});
		$(this).siblings().css({"background":"#ddd"});
		slide($(this).index());
	});
	
	
});