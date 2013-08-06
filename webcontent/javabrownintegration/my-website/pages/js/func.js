var carousel_initialized = false;


$(document).ready(function() {
	/*$('.slider').jcarousel( {
		initCallback: slider_initCallback,
		itemFirstInCallback: slider_firstInCallback,
		scroll: 1,
		auto: 2,
		wrap: 'both',
		// This tells jCarousel NOT to autobuild prev/next buttons
		buttonNextHTML: null,
		buttonPrevHTML: null
	});*/
	//initSlider();
});

function slider_initCallback (carousel) {
	$('.slider-nav a').bind('click', function() {
		carousel.scroll($.jcarousel.intval($(this).text()));
		return false;
	});
}

function slider_firstInCallback(carousel, item, idx, state) {
	$('.slider-nav a').removeClass('active');
	$('.slider-nav a').eq(idx-1).addClass('active');
}

function stopSlider(){
  
	 //$.jcarousel.reset();

}
  
function initSlider(){
  			$('#rkslider').jcarousel( {
				initCallback: slider_initCallback,
				itemFirstInCallback: slider_firstInCallback,
				scroll: 3,
				auto: 3,
				wrap: 'both',
				// This tells jCarousel NOT to autobuild prev/next buttons
				buttonNextHTML: null,
				buttonPrevHTML: null,
				itemLoadCallback: function(item, carousel) {
				  //$(carousel).reset();
				  //alert(item.size());
				}		
			});
}