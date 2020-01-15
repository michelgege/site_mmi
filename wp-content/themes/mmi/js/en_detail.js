console.log('test');
var player_video = jQuery('video')[0];
var is_play = false;
jQuery('body').on('click', ".video", function() {
	console.log('bouton pressé')
	if(is_play == false){
        jQuery('.button').addClass("active");
		player_video.play();
		is_play = true;
	} else {
		player_video.pause();
		is_play = false;
	};
});


function competences_deroulantes(){

	jQuery('div.titre').click(function(){

		var id=jQuery(this).attr("data-id");

		jQuery('div.content[data-id= "'+id+'"]').toggleClass('active');

	})

}
competences_deroulantes();