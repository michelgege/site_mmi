jQuery(document).ready(function($) {
	function pins() {
		$(".pins").click(function() {
			$(this).addClass('active');
			$(".pins").not(this).removeClass('active');

			var id=$(this).attr("data-id");
			$('.pop_up[data-id= "'+id+'"]').addClass('active');
			$('.pop_up').not('.pop_up[data-id= "'+id+'"]').removeClass('active');
		})

		$(".cross").click(function() {
			$(".pins").removeClass('active');
			$(".pop_up").removeClass('active');
		})
	}
	pins();
	

	//responsive list

	$(".list_header img").click(function() {

		$(".list_content").toggleClass('active');
	})

	function selectCountry(){

			$("p.country_content").click(function() {

				$('div.list_header p').text(jQuery(this).attr('data-country'));
				$(".list_content").removeClass('active');
				$(".list_content").addClass('absolute');

				var country=$(this).attr("data-country");
				$('.pop_up[data-country= "'+country+'"]').addClass('active');
				$(".pop_up").not('.pop_up[data-country= "'+country+'"]').removeClass('active');
		})
	}
	selectCountry();
	

});