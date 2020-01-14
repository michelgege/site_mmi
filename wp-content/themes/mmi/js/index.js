jQuery(document).ready(function(){
	function department_slider() {
		jQuery("#department_slider >img:first-of-type").addClass('department_selected');
		jQuery("#department_slider >img:nth-of-type(2)").addClass('department_next');
		jQuery("#department_slider >img:last-of-type").addClass('department_prev');
		// Next
		jQuery(".department_next").click(function() {
			jQuery(this).prev().removeClass('department_selected').addClass('department_prev');

			jQuery(this).removeClass('department_next').addClass('department_selected');

			if (jQuery(".department_slider >img").hasClass('department_hide')) {
				jQuery(this).prev().removeClass('department_prev').addClass('department_hide');
			}

			else {
				jQuery(this).prev().removeClass('department_prev').addClass('department_next');
			}
		});

		// Prev
		// jQuery(".department_prev").click(function() {

		// });
	}
	department_slider();
})