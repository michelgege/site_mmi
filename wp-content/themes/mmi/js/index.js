jQuery(document).ready(function(){
	// function department_slider() {
	// 	jQuery("#department_slider >img:first-of-type").addClass('department_selected');
	// 	jQuery("#department_slider >img:nth-of-type(2)").addClass('department_next');
	// 	jQuery("#department_slider >img:last-of-type").addClass('department_prev');
	// 	jQuery("#department_slider >img").each(function(i) {
	// 		jQuery("#department_slider >img:nth-of-type("+(i+1)+")").attr('position',i+1);
			
	// 	});
	// 	// Next
	// 	jQuery("body").on('click', '.department_next', function() {
	// 		var position_last = jQuery("#department_slider >img").size();
	// 		next_position(this, position_last);
	// 		change_class(position_last);
	// 	});

	// 	jQuery("body").on('click', '.department_prev', function() {
	// 		var position_last = jQuery("#department_slider >img").size();
	// 		prev_position(this, position_last);
	// 		change_class(position_last);
	// 	});
	// 	// Prev
	// 	// jQuery(".department_prev").click(function() {

	// 	// });

	// 	function next_position(slide, last) {
	// 		var ref_position = jQuery(slide).attr('position');
			
	// 		jQuery("#department_slider >img[position=\""+last+"\"").attr('position', last-1);

	// 		if (jQuery("#department_slider >img[position="+(ref_position-1)+"]").attr('position') == 1) {
	// 			jQuery("#department_slider >img[position="+(ref_position-1)+"]").attr('position', last);
	// 		}

	// 		else {
	// 			jQuery("#department_slider >img[position="+(ref_position-1)+"]").attr('position', ref_position-1);
	// 		}

	// 		jQuery(slide).attr('position', ref_position-1)
	// 	}

	// 	function prev_position(slide, last) {
	// 		var ref_position = jQuery(slide).attr('position');
			
	// 		jQuery("#department_slider >img[position=\""+last+"\"").attr('position', last+1);

	// 		if (jQuery("#department_slider >img[position="+(ref_position+1)+"]").attr('position') == 1) {
	// 			jQuery("#department_slider >img[position="+(ref_position+1)+"]").attr('position', last);
	// 		}

	// 		else {
	// 			jQuery("#department_slider >img[position="+(ref_position+1)+"]").attr('position', ref_position+1);
	// 		}

	// 		jQuery(slide).attr('position', ref_position+1)
	// 	}

	// 	function change_class(last) {
	// 		jQuery("#department_slider >img").removeClass();
	// 		jQuery("#department_slider >img[position=\"1\"]").addClass('department_selected');
	// 		jQuery("#department_slider >img[position=\"2\"]").addClass('department_next');
	// 		jQuery("#department_slider >img[position="+last+"]").addClass('department_prev');
	// 	}
	// }
	// department_slider();
})