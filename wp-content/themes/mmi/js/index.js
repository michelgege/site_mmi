jQuery(document).ready(function(){
	function department_slider() {
		jQuery(".department_next").click(function() {
			jQuery(".department_selected").removeClass('.department_selected').addClass('.department_prev');
			jQuery(this).removeClass('.department_next').addClass('.department_selected');
		});
	}
	department_slider();
})