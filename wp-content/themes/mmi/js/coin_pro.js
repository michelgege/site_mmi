jQuery(document).ready(function ($) {

	// var documentEl = $(document),
	// 	fadeElem = $('.fade-scroll');

	// documentEl.on('scroll', function() {
	// 	var currScrollPos = documentEl.scrollTop();

	// 	fadeElem.each(function(){
	// 		var $this = $(this),
	// 			elemOffsetTop = $this.offset().top;
	// 		if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 -(currScrollPos-elemOffsetTop)/300);
	// 	});
	// });


$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
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

