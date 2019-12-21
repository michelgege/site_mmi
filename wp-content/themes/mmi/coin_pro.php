<?php
/**
 * Template Name: Coin Pro
 */
?>

<?php
get_header();
?>



<div id="wrap_body">


	<h2 class="pro_title"> Besoin de nous ? </h2>


	<div id="company">
		<h4 class="text"> Vous êtes une entrepise ? </h4>
		<h4 class="text"> Nos étudiants peuvent vous aider via les stages ou les projets </h4>
	</div>





	<div id="scene" class="scene">
		<div  class="layer" data-depth="0.10">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_grey_square_1.svg" id="grey_square">
		</div> 
		<div  class="layer" data-depth="0.40">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_white_triangle_1.svg" id="white_triangle">
		</div> 
		<div  class="layer" data-depth="0.90">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_border_red_triangle_1.svg" id="border_red_triangle">
		</div> 


		<div  class="layer" data-depth="-.50">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_red_triangle_2.svg" id="red_triangle">
		</div> 
		<div  class="layer" data-depth="0.20">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_border_white_triangle_2.svg" id="border_white_triangle">
		</div> 
		<div  class="layer" data-depth="0.70">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_grey_triangle_2.svg" id="grey_triangle">
		</div>

	</div>

	<div id="skills"> 
		<h3 class="pro_subtitle"> Les Compétences </h3>

		<div id="paragraph_button">
			<div id="pro_paragraph_p">
				<p class="pro_paragraph"> Duis aute irure dolor in reprehenderit in voluptate </p>
				<p class="pro_paragraph">velit esse cillum dolore eu fugiat nulla pariatur. <span class="bold"> Excepteur sint occaecat </span> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Integer vel blandit enim. Morbi sollicitudin erat ac tempus ultricies. In congue commodo risus, et viverra turpis pellentesque id. Aenean sit amet libero blandit, semper. </p>
			</div>

			<span class="button"><p class="button_text"> Voir les realisations </p></span>
		</div>

	</div>



	<div id="projects"> 
		<h3 class="pro_subtitle"> Les Projets </h3>

		<p class="pro_paragraph_min"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
			tempor incididunt ut labore et dolore magna aliqua. <span class="bold"> Ut enim ad minim </span> 
			veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
		commodo consequat. </p>
	</div>

	<div id="stage"> 
		<h3 class="pro_subtitle"> Le Stage </h3>

		<p class="pro_paragraph_min"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
		tempor incididunt ut labore et dolore magna aliqua. <span class="bold"> Ut enim ad minim </span>
		veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
		commodo consequat.</p>
	</div>






	<div id="event"> 
		<h3 class="pro_subtitle"> L'évènement MMI Et Après </h3>

		<p class="pro_paragraph_min"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
		tempor incididunt ut labore et dolore magna aliqua. <span class="bold"> Ut enim ad minim </span>
		veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
		commodo consequat.</p>
	</div>


	<h2 class="pro_title_up"> les temoignages </h2>

	<div class="testimony">

		<div class="testimony_block">
		<div class="after">
		<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/testimony_picture_1.jpg" id="testimony_picture">
		</div>

		<div class="column">
			<h3 class="testimony_name"> Sandra <span class="uppercase"> marechal </span> </h3>
			<p class="profession"> Lorem Ipsum </p> 
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_shape.svg" id="pro_shape">

		</div>


		<p class="testimony_comment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut  erat ac tempus ultricies. In congue commodo risus, et viverra turpis pellentesque id. Aenean sit amet libero blandit, semper. </p>
		<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/quote.svg" id="quote">


		</div>


	</div>

	<div class="testimony_second">

		<div class="testimony_block_second">
		<div class="after">
		<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/testimony_picture_2.jpg" id="testimony_picture">
		</div>

		<div class="column">
			<h3 class="testimony_name"> Jean <span class="uppercase"> pat </span> </h3>
			<p class="profession"> Lorem Ipsum </p> 
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_shape.svg" id="pro_shape">

		</div>


		<p class="testimony_comment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
		<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/quote.svg" id="quote">

		</div>


	</div>


</div>



<?php
get_footer();
?>

<script src="<?php echo get_template_directory_uri() ?>/js/libs/parallax.min.js"></script>
<script>

	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene, {
		selector: '.layer'
	});

	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene, {
		selector: '.layer'
	});
</script>