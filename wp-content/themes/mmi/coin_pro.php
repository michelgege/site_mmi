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
			<img src="<?php echo get_template_directory_uri() ?>/img/pro_grey_square_1.svg" id="grey_square">
		</div> 
		<div  class="layer" data-depth="0.40">
			<img src="<?php echo get_template_directory_uri() ?>/img/pro_white_triangle_1.svg" id="white_triangle">
		</div> 
		<div  class="layer" data-depth="0.90">
			<img src="<?php echo get_template_directory_uri() ?>/img/pro_border_red_triangle_1.svg" id="border_red_triangle">
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
</script>