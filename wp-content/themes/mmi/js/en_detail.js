jQuery(document).ready(function ($) {
   	function skills_list() {
   		$('.skills_container >div').click(function() {
   			$(this).next().toggleClass('active');
   		})
	}
   	skills_list();
});