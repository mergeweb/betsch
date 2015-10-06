(function ($) {
	$(document).ready(function() {
		// when the image loads with a subpath, toggles the hover prop. on img links
		
		var currPath = $(location).attr('pathname');
			$('a[href~='+currPath+']').parent().parent().next().find('img').addClass('hover');
		
		
		// toggles hover class off and on when links are hovered over
		$('.region-footer-menu > div > div.content > ul > li > a').hover(
			function () { 
				var link = $(this).attr("href");
				
				if(currPath != link) {
					$('a[href~='+currPath+']').parent().parent().next().find('img').toggleClass('hover');
					$('a[href~='+link+']').parent().parent().next().find('img').toggleClass('hover');
					//$('a[href~='+currPath+']').find('img').toggleClass('hover').next().stop(true, true).toggleClass('hover');
					//$('a[href~='+link+']').find('img').toggleClass('hover').next().stop(true, true).toggleClass('hover');
				} 
			}
		); 
		
		
		// if(currPath == '/portfolio') {
			$('#block-views-port-galleries-block').find('img[class!=hover]').click(
				function() {
					var portLink = $(this).parent().parent().parent().prev().find('a').attr('href');
					$(this).parent().attr('href', portLink);
				}
			);
		// }
	});
})
(jQuery);