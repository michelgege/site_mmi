<?php
/**
 * Template Name: Coin Pro
 */
?>

<?php get_header(); ?>

<div class="wrap">
	<section id="need_us">
		<h2>Besoin de nous ?</h2>

		<p id="company" data-aos="fade-left">Vous êtes une entrepise ?<br/>Nos étudiants peuvent vous aider via les stages ou les projets.</p>

		<div class="need_us_content" data-aos="fade-right">
			<h3>Les compétences</h3>
			<div>

				<div data-aos="zoom-in">	<?php the_field('pro_content_skills'); ?> </div>

				<a class="link_button" href="realisations">Voir les réalisations</a>
			</div>
		</div>

		<div class="need_us_content" data-aos="fade-right">
			<h3>Les projets</h3>

				<?php the_field('pro_content_projects'); ?> 

		</div>

		<div class="need_us_content" data-aos="fade-left">
			<h3>Le stage</h3>

			<?php the_field('pro_content_internship'); ?> 

		</div>

		<div class="need_us_content" data-aos="fade-up">
			<h3 >L'évènement MMI Et Après</h3>

				<?php the_field('pro_content_mmi_et_apres'); ?> 

		</div>

		<div class="scene" data-aos="fade-down">
			<img data-depth="0.8" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/need_us_rectangle.svg" alt="">
			<img data-depth="-1.5" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/need_us_triangle_first.svg" alt="">
			<img data-depth="2.3" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/need_us_triangle_second.svg" alt="">
		</div>
		
	</section>



	<section id="testimony"> 
		<h2>Les témoignages</h2>

		<?php if( have_rows('pro_testimonials') ): ?> 

			<?php while( have_rows('pro_testimonials') ): the_row(); 

				// vars

				$image = get_sub_field('pro_testimony_img');
				$name = get_sub_field('pro_testimony_name');
				$job = get_sub_field('pro_testimony_job');
				$content = get_sub_field('pro_testimony_content');?>



				<div class="testimony_container" data-aos="fade-up">
					<img class="testimony_quote" src="<?php echo get_template_directory_uri() ?>/img/quote.svg" alt="">
					<div class="testimony_img fade-scroll fade">
						<img src="<?php echo $image; ?>" alt="Photo Profil">
					</div>
					<div class="testimony_titles">
						<p><?php echo $name; ?></p>
						<p><?php echo $job; ?></p>
						<img src="<?php echo get_template_directory_uri() ?>/img/accueil/testimony_line_normal.svg" alt="">
					</div>
					<div class="testimony_content ">
						<?php echo $content; ?>
					</div>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>

		<div class="scene" data-aos="fade-up">
			<img data-depth="-0.8" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/testimony_triangle_first.svg" alt="">
			<img data-depth="1.4" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/testimony_triangle_second.svg" alt="">
			<img data-depth="-1.9" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/testimony_triangle_third.svg" alt="">
		</div>
	</section>



	<section id="form" data-aos="zoom-in">
		<h3 >Vous aussi, proposer votre projet</h3>
		<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_line.svg" alt="">
		<form method="post" action="<?php echo get_template_directory_uri() ?>/post-form.php">
			<input type="text" placeholder="Nom" name="nom" required>
			<input type="text" placeholder="Prénom" name="prenom" required>

			<input type="email" placeholder="Email" name="mail" required>

			<textarea placeholder="Description du projet (Durée, missions, compétences requises…)" name="desc" required></textarea>

			<div class="checkbox_container">
				<label>Projet
					<input type="radio" name="stageprojet" value="projet">
					<span></span>
				</label>

				<label>Stage
					<input type="radio" name="stageprojet" value="stage">
					<span></span>
				</label>
			</div>

			<input type="submit" name="submitpost" value="Envoyer" class="button" id="form_button" required> 
			<div class="scene" data-aos="fade-right">
				<img data-depth="-0.6" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_form_rectangle.svg" alt="">
				<img data-depth="1.4" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_form_triangle_first.svg" alt="">
				<img data-depth="-1.9" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_form_triangle_second.svg" alt="">
			</div>
		</form>
		<div class="scene" data-aos="fade-bottom">
			<img data-depth="0.6" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_triangle_first.svg" alt="">
			<img data-depth="-1.5" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_triangle_second.svg" alt="">
			<img data-depth="1.3" src="<?php echo get_template_directory_uri() ?>/img/coin_pro/form_triangle_third.svg" alt="">
		</div>
	</section>
</div>
<?php get_footer(); ?>