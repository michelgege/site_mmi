$(document).ready(function() {
	$(".pins").click(function() {

		$(this).addClass('active');
		$(".pins").not(this).removeClass('active');

		var id=$(this).attr("data-id");
		$('.pop_up[data-id= "'+id+'"]').addClass('active');
		$(".pop_up").not('.pop_up[data-id= "'+id+'"]').removeClass('active');
	})
});