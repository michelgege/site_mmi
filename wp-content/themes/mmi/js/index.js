jQuery(document).ready(function($) {
	// function department_border() {
	// 	jQuery('.department_selected').after('<span class=\"line top\"></span>');
	// 	jQuery('.department_selected').after('<span class=\"line right\"></span>');
	// 	jQuery('.department_selected').after('<span class=\"line bottom\"></span>');
	// 	jQuery('.department_selected').after('<span class=\"line left\"></span>');
	// 	jQuery('.department_selected').after('<span class=\"border\"></span>');

		
	// }
	// department_border();

	// function department_slider() {
	// 	jQuery("#department_slider >img:first-of-type").addClass('department_selected');
	// 	jQuery("#department_slider >img:nth-of-type(2)").addClass('department_next');
	// 	jQuery("#department_slider >img:last-of-type").addClass('department_prev');
	// 	jQuery("#department_slider >img").each(function(i) {
	// 		jQuery("#department_slider >img:nth-of-type("+(i+1)+")").attr('position',i+1);
			
	// 	});
	// 	// Next
	// 	jQuery("body").on('click', '.department_next', function() {
	// 		//Class active
	// 		jQuery("#department_slider").removeClass('active');
	// 		jQuery("#department_slider .line").removeClass('hide');
	// 		jQuery("#department_slider .border").removeClass('active');

	// 		next_position(this);
	// 		change_class();
	// 	});

	// 	jQuery("body").on('click', '.department_prev', function() {
	// 		//Class active
	// 		jQuery("#department_slider").removeClass('active');
	// 		jQuery("#department_slider .line").removeClass('hide');
	// 		jQuery("#department_slider .border").removeClass('active');

	// 		prev_position(this);
	// 		change_class();
	// 	});

	// 	function next_position(slide) {
	// 		//Get the position of the slide
	// 		var ref_position = jQuery(slide).attr('position');
			
	// 		//Change the position of the next slide
	// 		jQuery("#department_slider >img[position=\"3\"").attr('position', 2);

	// 		//Change the position of the last slide
	// 		jQuery("#department_slider >img[position=\"1\"]").attr('position', 3);
			
	// 		//Change the position of the slide
	// 		jQuery(slide).attr('position', 1)
	// 	}

	// 	function prev_position(slide) {
	// 		//Get the position of the slide
	// 		var ref_position = jQuery(slide).attr('position');
			
	// 		//Change the position of the next slide
	// 		jQuery("#department_slider >img[position=\"2\"").attr('position', 3);
			
	// 		//Change the position of the last slide
	// 		jQuery("#department_slider >img[position=\"1\"").attr('position', 2);
			
	// 		//Change the position of the slide
	// 		jQuery(slide).attr('position', 1)
	// 	}

	// 	function change_class() {
	// 		jQuery("#department_slider >img").removeClass();
	// 		jQuery("#department_slider >img[position=\"1\"]").addClass('department_selected');
	// 		jQuery("#department_slider >img[position=\"2\"]").addClass('department_next');
	// 		jQuery("#department_slider >img[position=\"3\"]").addClass('department_prev');

	// 		jQuery("#department_slider >img").on('transitionend webkitTransitionEnd oTransitionEnd', function () {
	// 		    //Class active
	// 			jQuery("#department_slider").addClass('active');
	// 			jQuery("#department_slider .line.left").on('transitionend webkitTransitionEnd oTransitionEnd', function () {
	// 				jQuery("#department_slider .line").addClass('hide');
	// 				jQuery("#department_slider .border").addClass('active');
	// 			});
	// 		});
			
	// 	}
	// 	//Set the animation
	// 	jQuery("#department_slider .border").addClass('active');
	// }
	// department_slider();

	function department_flickity() {
		$('#department .main-carousel').flickity({
	  		// options
	  		cellAlign: 'center',
	  		contain: true,
	  		pageDots: false,
	  		wrapAround: true,
	  		draggable: false
		});

		var $carousel = $('#department .main-carousel').flickity();

		// previous
		$('#department_slider_arrows >img:nth-child(1)').on( 'click', function() {
			$carousel.flickity('previous');
		});

		// next
		$('#department_slider_arrows >img:nth-child(2)').on( 'click', function() {
			$carousel.flickity('next');
		});

		//Click
		$carousel.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
			if ( typeof cellIndex == 'number' ) {
			  $carousel.flickity( 'selectCell', cellIndex );
			}
		});
	}
	department_flickity();

	function international_flickity() {
		$('#international .main-carousel').flickity({
	  		// options
	  		cellAlign: 'center',
	  		contain: true,
	  		pageDots: false,
	  		wrapAround: true,
	  		draggable: false
		});

		var $carousel = $('#international .main-carousel').flickity();

		// previous
		$('#international_slider_arrows >img:nth-child(1)').on( 'click', function() {
			$carousel.flickity('previous');
		});

		// next
		$('#international_slider_arrows >img:nth-child(2)').on( 'click', function() {
			$carousel.flickity('next');
		});

		//Click
		$carousel.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
			if ( typeof cellIndex == 'number' ) {
			  $carousel.flickity( 'selectCell', cellIndex );
			}
		});
	}
	international_flickity();
});

Flickity.createMethods.push("_createPrevNextCells");

Flickity.prototype._createPrevNextCells = function() {
  this.on("select", this.setPrevNextCells);
};

function changeSlideClasses(slide, method, className) {
  if (!slide) {
    return;
  }
  slide.getCellElements().forEach(function(cellElem) {
    cellElem.classList[method](className);
  });
}

Flickity.prototype.setPrevNextCells = function() {
  // remove classes
  changeSlideClasses(this.previousSlide, "remove", "is-previous");
  changeSlideClasses(this.nextSlide, "remove", "is-next");
  changeSlideClasses(this.slides[(this.slides.length) - 1], "remove", "is-previous");
  changeSlideClasses(this.slides[0], "remove", "is-next");
  // set slides
  this.previousSlide = this.slides[this.selectedIndex - 1];
  this.nextSlide = this.slides[this.selectedIndex + 1];
  // add classes
	if (this.previousSlide == null) {
		changeSlideClasses(this.slides[(this.slides.length) - 1], "add", "is-previous");
	}

	else {
		changeSlideClasses(this.previousSlide, "add", "is-previous");
	}

	if (this.nextSlide == null) {
		changeSlideClasses(this.slides[0], "add", "is-next");
	}

	else {
		changeSlideClasses(this.nextSlide, "add", "is-next");
	}
};