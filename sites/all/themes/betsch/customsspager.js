/**(function($) {
	$(document).ready(function() {
		
		var cnt = $('.views-slideshow-controls-bottom').find('img').length;

		if(cnt > 5) {
			$('.views-slideshow-controls-bottom')
				.after("<div class='pager pagerLeft'><b><<</b></div> <div class='pager pagerRight'><b>>></b></div>");
		} else {
			$('.views-slideshow-controls-bottom')
				.after("<div class='pager pagerLeft'></div> <div class='pager pagerRight'></div>");
		}
		
		var slidingNav = $('.views-slideshow-controls-bottom >  .views-slideshow-pager-fields');
		
		
		$('div.pagerRight').click(function() {
			$(slidingNav).animate({"marginLeft":"-=139px"}, "slow");
		});
		
		$('div.pagerLeft').click(function() {
			$(slidingNav).animate({"marginLeft":"+=139px"}, "slow");
		});
		
		
		
	});
})
(jQuery);**/

(function($) {
	$(document).ready(function() {
		if ($('.views_slideshow_pager_field_item').length == 1) {
			$('.views_slideshow_pager_field_item').addClass('active');
			$('.views-field.views-field-field-project-info > div').fadeIn("fast");
			$('.views-field.views-field-field-image > div').css({'width': '510', 'overflow': 'hidden'});
			
			$('.views-slideshow-controls-bottom').after('<div class="views-slideshow-controls-text"><span class="views-slideshow-controls-text-previous"><a href="#">Previous</a></span><span class="views-slideshow-controls-text-next"><a href="#">Next</a></span></div>');
		}
		
		$('.views-slideshow-controls-bottom').after($('.views-slideshow-controls-text'));
	});
})
(jQuery);