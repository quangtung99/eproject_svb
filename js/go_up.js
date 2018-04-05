	$(document).ready(function(){
		$(window).scroll(function(){
			if($(this).scrollTop() > 200 ){
				$('.go_up').fadeIn();
				} else {
					$('.go_up').fadeOut();
				}	
				
		});
		$('.go_up').click(function(){
			$("html,body").animate( { scrollTop:0}, 800)
		});
	});
