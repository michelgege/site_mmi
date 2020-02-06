<?php
/**
 * Template Name: Coin Pro
 */
?>

<?php get_header(); ?>

<div class="wrap">
	<section id="need_us">
		<h2>Besoin de nous ?</h2>

		<p id="company">Vous êtes une entrepise ?<br/>Nos étudiants peuvent vous aider via les stages ou les projets.</p>
	
		<div class="need_us_content">
			<h3>Les compétences</h3>
			<div>
				<?php the_field('pro_content_skills'); ?>
				<a class="link_button" href="realisation">Voir les réalisations</a>
			</div>
		</div>

		<div class="need_us_content">
			<h3>Les projets</h3>
			<?php the_field('pro_content_projects'); ?>
		</div>

		<div class="need_us_content">
			<h3>Le stage</h3>
			<?php the_field('pro_content_internship'); ?>
		</div>

		<div class="need_us_content">
			<h3>L'évènement MMI Et Après</h3>
			<?php the_field('pro_content_mmi_et_apres'); ?>
		</div>

		<!-- <div id="scene" class="scene">
			<div  class="layer" data-depth="0.10">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_grey_square_1.svg" id="grey_square" alt="">
			</div> 
			<div  class="layer" data-depth="0.40">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_white_triangle_1.svg" id="white_triangle" alt="">
			</div> 
			<div  class="layer" data-depth="0.90">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_border_red_triangle_1.svg" id="border_red_triangle" alt="">
			</div> 


			<div  class="layer" data-depth="-.50">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_red_triangle_2.svg" id="red_triangle" alt="">
			</div> 
			<div  class="layer" data-depth="0.20">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_border_white_triangle_2.svg" id="border_white_triangle" alt="">
			</div> 
			<div  class="layer" data-depth="0.70">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_grey_triangle_2.svg" id="grey_triangle" alt="">
			</div>

			<div  class="layer" data-depth="0.30">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_red_square_3.svg" id="red_square" alt="">
			</div> 
			<div  class="layer" data-depth="-0.20">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_white_triangle_3.svg" id="white_triangle_three" alt="">
			</div> 
			<div  class="layer" data-depth="0.60">
				<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/pro_border_grey_triangle_3.svg" id="border_grey_triangle" alt=""> 
			</div>
		</div> -->
	</section>



	<section id="testimony">
		<h2>Les témoignages</h2>
		<?php if( have_rows('pro_testimonials') ): ?>

			<?php while( have_rows('pro_testimonials') ): the_row(); 

				// vars
				$image = get_sub_field('pro_testimony_img');
				$name = get_sub_field('pro_testimony_name');
				$job = get_sub_field('pro_testimony_job');
				$content = get_sub_field('pro_testimony_content');

				?>

				<div class="testimony_container">
					<img class="testimony_quote" src="<?php echo get_template_directory_uri() ?>/img/quote.svg" alt="">
					<div class="testimony_img">
						<img src="<?php echo $image; ?>" alt="">
					</div>
					<div class="testimony_titles">
						<p><?php echo $name; ?></p>
						<p><?php echo $job; ?></p>
						<img src="<?php echo get_template_directory_uri() ?>/img/accueil/testimony_line_normal.svg" alt="">
					</div>
					<div class="testimony_content">
						<?php echo $content; ?>
					</div>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>
	</section>



	<section id="form">
		<h3>Vous aussi, proposer votre projet</h3>
	</section>










		<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_shape.svg" id="form_shape">

		<div id="wrap_form">

			<form method="post" action="<?php echo get_template_directory_uri() ?>/post-form.php">
				<div class="form_flex">
					<input type="text" placeholder="Nom" id="name" name="nom" required>
					<input type="text" placeholder="Prénom" id="surname" name="prenom" required>
				</div>

				<div class="form_flex">
				<input type="email" placeholder="Email" id="email" name="mail" required>
				</div>

				<div class="form_flex">
				<textarea placeholder="Description du projet (Durée, missions, compétences requises…)" name="desc" id="" required>
				</textarea>
				</div>
				
				<div class="checkbox_container">
					<label class="checkbox">Projet
					  <input type="radio" id="projet" name="stageprojet" value="projet">
					  <span class="checkmark"></span>
					</label>
					
					<label class="checkbox">Stage
					  <input type="radio" id="stage" name="stageprojet" value="stage">
					  <span class="checkmark"></span>
					</label>
				</div>
				

				<div id="grey_pro">
				<input type="submit" name="submitpost" value="Envoyer" class="button" id="form_button" required> 
				</div>
			</form>

		</div>
</div>
<?php get_footer(); ?>