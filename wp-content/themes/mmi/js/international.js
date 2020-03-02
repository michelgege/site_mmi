jQuery(document).ready(function($) {
	function pins() {
		$(".pins").click(function() {
			$(this).addClass('active');
			$(".pins").not(this).removeClass('active');

			var id=$(this).attr("data-id");
			$('.testimony_content[data-id= "'+id+'"]').addClass('active');
			$('.testimony_content').not('.testimony_content[data-id= "'+id+'"]').removeClass('active');
		})

		$(".cross").click(function() {
			$(".pins").removeClass('active');
			$(".testimony_content").removeClass('active');
		})
	}
	pins();
});