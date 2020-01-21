jQuery(document).ready(function ()
{
jQuery('img#cross').click(function() {
	jQuery('.pop-up').addClass('open');
	window.location.replace("coin-pro#wrap_form");

});

jQuery('').click(function() {
	jQuery('.pop-up.open').removeClass('open');
});

setInterval(function() {
	
	var div = document.querySelector("#counter");
	var count = div.textContent * 1 - 1;
	div.textContent = count;
	if (count <= 0) {
		jQuery('.pop-up').addClass('open');
		window.location.replace("coin-pro#wrap_form");
	}
}, 1000);

	
});