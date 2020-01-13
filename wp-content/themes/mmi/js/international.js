jQuery(document).ready(function() {
	jQuery(".pins").click(function() {

		jQuery(this).addClass('active');
		jQuery(".pins").not(this).removeClass('active');

		var id=jQuery(this).attr("data-id");
		jQuery('.pop_up[data-id= "'+id+'"]').addClass('active');
		jQuery(".pop_up").not('.pop_up[data-id= "'+id+'"]').removeClass('active');
	})


	jQuery(".cross").click(function() {

		jQuery(".pins").removeClass('active');
		jQuery(".pop_up").removeClass('active');
	})


	jQuery(".list_header img").click(function() {

		jQuery(".list_content").toggleClass('active');
	})
});