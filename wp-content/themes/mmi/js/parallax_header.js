jQuery(document).ready(function(){
	//Parallax
	var scenes = [];
	var scenesSelector = jQuery('body').find('.scene')
	jQuery('.scene').each(function(i){
		scenes[i] = new Parallax(scenesSelector[i]);
	});

	//Scroll
	function scroll() {
		jQuery('#scroll').click(function() {
			scrollTo(jQuery('section:first-of-type'));
		});

		function scrollTo(target) {
	       	if (target.length) {
	           	jQuery("html, body").stop().animate( { scrollTop: target.offset().top }, 1000);
	       	}
	   	}
	}
   	scroll();

   	//Scroll
	function scroll_footer() {
		jQuery('.right >img').click(function() {
			scrollTo(jQuery('header'));
		});

		function scrollTo(target) {
	       	if (target.length) {
	           	jQuery("html, body").stop().animate( { scrollTop: target.offset().top }, 1000);
	       	}
	   	}
	}
   	scroll_footer();
});



