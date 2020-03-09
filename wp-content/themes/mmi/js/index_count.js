jQuery(document).ready(function ($) {

// section#skills #skills_container #skills_content >div

    var has_counted = false;

    function count() {
		$('.count').each(function () {
			

			if ($(this).text().indexOf('%') == -1)
			{
				$(this).prop('Counter',0).animate({
				Counter: $(this).text()
				}, {
					duration: 2000,
					easing: 'swing',
					step: function (now) {
						
						$(this).text(Math.ceil(now));
	
					}
				});
			}
            else
            {
				$(this).prop('Counter',0).animate({
				Counter: $(this).text()
				}, {
					duration: 2000,
					easing: 'swing',
					step: function (now) {
						
						$(this).text(Math.ceil(now) + '%');
	
					}
				});
			}

		});
    }

    $(window).on("load",function() {
        

        $(window).scroll(function() {

            if(has_counted == false)
            {
                var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            
                /* Check the location of each desired element */ 
                var objectBottom = $("div.stats_content").offset().top + $("div.stats_content").outerHeight();
                
                /* If the element is completely within bounds of the window, fade it in */
                if (objectBottom < windowBottom) { //object comes into view (scrolling down)

                    has_counted = true;

                    count();
                    
                    
                }
                
            }
        }).scroll(); //invoke scroll-handler on page-load

             
    });

});
