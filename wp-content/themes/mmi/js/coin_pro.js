jQuery(document).ready(function ($) {

	var documentEl = $(document),
		fadeElem = $('.fade-scroll');

	documentEl.on('scroll', function() {
		var currScrollPos = documentEl.scrollTop();

		fadeElem.each(function(){
			var $this = $(this),
				elemOffsetTop = $this.offset().top;
			if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 -(currScrollPos-elemOffsetTop)/300);
		});
	});





//   $('.monster').fadeIn('slow');
// });

// jQuery(document).ready(function ($) {
    
//     /* Every time the window is scrolled ... */
//     $(window).scroll( function(){
    
//         /* Check the location of each desired element */
//         $('.hideme').each( function(i){
            
//             var bottom_of_object = $(this).position().top + $(this).outerHeight();
//             var bottom_of_window = $(window).scrollTop() + $(window).height();
            
//             /* If the object is completely visible in the window, fade it it */
//             if( bottom_of_window > bottom_of_object ){
                
//                 $(this).animate({'opacity':'1'},800);
                    
//             }
            
//         }); 
    
//     });
    

});

