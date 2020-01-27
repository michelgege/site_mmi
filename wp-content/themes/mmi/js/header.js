jQuery(document).ready(function ($) {
    $('.burger').click(function() {
		$('.side_menu').addClass('open');
    });

    $('.cross').click(function() {
        $('.side_menu').removeClass('open');
	});

});