<?php
/**
 * Template Name: Coin Pro
 */
?>

<?php
get_header();
?>

<section>

<div id="wrap_body">


	<h2 class="pro_title"> Besoin de nous ? </h2>


	<div id="company">
		<h4 class="text"> Vous êtes une entrepise ? <br/>
		Nos étudiants peuvent vous aider via les stages ou les projets. </h4>
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

		<div  class="layer" data-depth="0.30">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_red_square_3.svg" id="red_square">
		</div> 
		<div  class="layer" data-depth="-0.20">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_white_triangle_3.svg" id="white_triangle_three">
		</div> 
		<div  class="layer" data-depth="0.60">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_border_grey_triangle_3.svg" id="border_grey_triangle">
		</div>




	</div>

	<div id="skills"> 
		<h3 class="pro_subtitle"> Les Compétences </h3>

		<div id="paragraph_button">
			<div id="pro_paragraph_p">
				<p class="pro_paragraph"><?php the_field('content_skills'); ?></p>
			</div>

			<a href="realisations.php" id="rea"> <input type="button" class="button" href="realisations.php" value="Voir les realisations"> </a>
		</div>

	</div>



	<div id="projects"> 
		<h3 class="pro_subtitle"> Les Projets </h3>

		<p class="pro_paragraph_min"><?php the_field('content_projects'); ?></p>
	</div>

	<div id="stage"> 
		<h3 class="pro_subtitle"> Le Stage </h3>

		<p class="pro_paragraph_min"><?php the_field('content_internship'); ?></p>
	</div>






	<div id="event"> 
		<h3 class="pro_subtitle"> L'évènement MMI Et Après </h3>

		<p class="pro_paragraph_min"><?php the_field('content_mmi_et_apres'); ?></p>
	</div>


	<h2 class="pro_title"> Les Témoignages </h2>

	<div class="testimony">

		<div class="testimony_block">
			<div class="after">
				<img src="<?php echo get_template_directory_uri() ?>/img//coin_pro/testimony_picture_1.jpg" id="testimony_picture">
			</div>

			<div class="column">
				<h3 class="testimony_name"><?php the_field('testimony_first_name'); ?></h3>
				<p class="profession"><?php the_field('testimony_first_job'); ?></p> 
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_shape.svg" id="pro_shape">
			</div>

			<p class="testimony_comment"><?php the_field('testimony_first_content'); ?></p>
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/quote.svg" id="quote">
		</div>
	</div>

	<div class="testimony_second">

		<div class="testimony_block_second">
			<div class="after">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/testimony_picture_2.jpg" id="testimony_picture">
			</div>

			<div class="column">
				<h3 class="testimony_name"><?php the_field('testimony_second_name'); ?></h3>
				<p class="profession"><?php the_field('testimony_second_job'); ?></p> 
				<img src="<?php echo get_template_directory_uri() ?>/img//coin_pro/pro_shape.svg" id="pro_shape">
			</div>

			<p class="testimony_comment"><?php the_field('testimony_second_content'); ?></p>
			<img src="<?php echo get_template_directory_uri() ?>/img//coin_pro/quote.svg" id="quote">
		</div>
	</div>




	<h2 id="form"> Vous aussi, proposez votre projet </h2>
	<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_shape.svg" id="form_shape">

	<div id="wrap_form">
		<form action="form.php" method="post">
			<div id="form_flex">
				<input type="text" placeholder="Nom" id="name" name="nom" required>
				<input type="text" placeholder="Prénom" id="surname" name="prenom" required>
			</div>
			<input type="email" placeholder="Email" id="email" name="mail" required>

			<input type="text" placeholder="Description du projet (Durée, missions, compétences requises…)" id="skills_required" name="desc" required>

			<div id="grey_pro">
				<input type="submit" name="" value="Envoyer" class="button" name="submit" required>
			</div>
		</form>
	</div>


</div>

<!-- <div id="scene_two">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_border_white_triangle_4.svg" data-depth="-0.90" id="border__white_triangle_four">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_white_triangle_big_4.svg" data-depth="0.70" id="white_triangle_four_big">
			<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_white_triangle_small_4.svg" data-depth="0.10" id="white_triangle_four_small">
</div> -->




</section>


<?php
get_footer();
?>