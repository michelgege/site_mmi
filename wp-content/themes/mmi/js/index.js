jQuery(document).ready(function($) {
	function department_flickity() {
		$('#department .main-carousel').flickity({
	  		// options
	  		cellAlign: 'center',
	  		contain: true,
	  		pageDots: false,
	  		wrapAround: true,
	  		imagesLoaded: true
		});

		var $carousel = $('#department .main-carousel').flickity();

		// previous
		$('#department .slider_arrows >img:nth-child(1)').on( 'click', function() {
			$carousel.flickity('previous');
		});

		// next
		$('#department .slider_arrows >img:nth-child(2)').on( 'click', function() {
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
	  		imagesLoaded: true
		});

		var $carousel = $('#international .main-carousel').flickity();

		// previous
		$('#international .slider_arrows >img:nth-child(1)').on( 'click', function() {
			$carousel.flickity('previous');
		});

		// next
		$('#international .slider_arrows >img:nth-child(2)').on( 'click', function() {
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

