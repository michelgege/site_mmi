jQuery(document).ready(function(){
	//Parallax
	var scene = jQuery('.scene').get(0);
	var parallaxInstance = new Parallax(scene);

	//Scroll
	function scroll() {
		jQuery('#scroll').click(function() {
			scrollTo(jQuery('section:first-of-type'));
		});
	}

	function scrollTo(target) {
       	if (target.length) {
           	jQuery("html, body").stop().animate( { scrollTop: target.offset().top }, 1000);
       	}
   	}

   	scroll();
});