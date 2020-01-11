<?php
/**
 * Template Name: Accueil
 */
?>

<?php
	get_header('index');
?>

<div class="wrap">

	<!-- Section Skills -->

	<section id="skills">
		<h2>les compétences</h2>
		<div id="skills_container">
			<p><?php the_field('home_content_skills'); ?></p>
			<div id="skills_content">
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/accueil/audiovisuel.svg" alt="Logo audiovisuel">
					<p>Audiovisuel</p>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/accueil/graphisme.svg" alt="Logo graphisme">
					<p>Graphisme</p>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/accueil/communication.svg" alt="Logo communication">
					<p>Communication</p>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/accueil/programmation.svg" alt="Logo programmation">
					<p>Programmation</p>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/accueil/gestion.svg" alt="Logo gestion de projet">
					<p>Gestion de projet</p>
				</div>
			</div>
		</div>
		<a class="link_button" href="#">MMI en détails</a>
	</section>

	<!-- Section Stats -->

	<section id="stats">
		<h2>mmi en chiffres</h2>
		<div id="stats_container">
			<div class="stats_content">
				<div>
					<p><?php the_field('home_first_number'); ?></p>
				</div>
				<p><?php the_field('home_first_desc'); ?></p>
			</div>
			<div class="stats_content">
				<div>
					<p><?php the_field('home_second_number'); ?></p>
				</div>
				<p><?php the_field('home_second_desc'); ?></p>
			</div>
			<div class="stats_content">
				<div>
					<p><?php the_field('home_third_number'); ?></p>
				</div>
				<p><?php the_field('home_third_desc'); ?></p>
			</div>
			<div class="stats_content">
				<div>
					<p><?php the_field('home_fourth_number'); ?></p>
				</div>
				<p><?php the_field('home_fourth_desc'); ?></p>
			</div>
		</div>
	</section>

	<!-- Section Department -->

	<section id="department">
		<h2>le département</h2>
		<div id="department_slider">
			<img class="second" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider2.jpg" alt="">
			<img class="first" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider1.jpg" alt="">
			<img class="thirst" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider3.jpg" alt="">
		</div>
		<div id="department_arrows">
			
		</div>
		<a class="link_button" href="#">Voir la vidéo <span class="bold">360°</span></a>
	</section>

	<!-- Section Highlights -->

	<section id="highlights">
		<h2>les temps forts</h2>
		<?php the_field('home_highlights_video'); ?>
		<div id="video">
			
		</div>
		<a class="link_button" href="#">Voir les réalisations</a>
	</section>
</div>

<?php
	get_footer();
?>