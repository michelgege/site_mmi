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

	function testimony_responsive() {
		$('#country-list').change(function(){
			$('.resp_content').each(function(){
				if ($(this).attr('data-country').toLowerCase() == $('#country-list').find(":selected").text().toLowerCase()) {
					$(this).addClass('active');
				}

				else {
					$(this).removeClass('active');
				}
			});
		});

		$('#country-list').trigger('change');
	}
	testimony_responsive();
});