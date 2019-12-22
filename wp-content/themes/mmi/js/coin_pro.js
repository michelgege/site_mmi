

    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene, {
        selector: '.layer'
    });


$(document).ready(function() {
		$('#menu').on('click', function() { // Au clic sur un élément
			var pourscroll = $(this).attr('href'); // Page cible
			var speed = 1200; // Durée de l'animation (en ms)
			$('html, header, body, footer').animate( { scrollTop: $(pourscroll).offset().top }, speed ); // Go
			return false;
		});
	});
