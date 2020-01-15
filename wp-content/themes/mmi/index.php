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
		<div class="scene">
			<img src="" alt="">
			<img src="" alt="">
		</div>
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
			<div id="department_border">
				<img class="department_selected" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider1_1.jpg" alt="">
			</div>
			<img class="department_next" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider1_3.jpg" alt="">
			<img class="department_prev" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider1_2.jpg" alt="">
		</div>
		<div id="department_arrows">
			
		</div>
		<a class="link_button" href="#">Voir la vidéo <span class="bold">360°</span></a>
	</section>

	<!-- Section Highlights -->

	<section id="highlights">
		<h2>les temps forts</h2>
		<div id="video">
			<?php the_field('home_highlights_video'); ?>
		</div>
		<a class="link_button" href="#">Voir les réalisations</a>
	</section>

	<!-- Section International -->

	<section id="international">
		<h2>l'international</h2>
		<p>Vous souhaitez partir à l'étranger pour un stage, un S4 ou un DUETI ?</p>
		<div id="international_content">
			<div id="international_slider">
				<img class="international_second" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider2_2.jpg" alt="">
				<div class="international_first border">
					<img class="international_first" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider2_1.jpg" alt="">
				</div>
				<div id="international_arrows">
					<img src="" alt="">
					<img src="" alt="">
				</div>
			</div>
			<p><?php the_field('home_international_content')?></p>
		</div>
		<a class="link_button" href="#">En savoir plus</a>
	</section>

	<!-- Section Testimony -->

	<section id="testimony">
		<h2>les témoignages</h2>
		<div class="testimony_container normal">
			<img class="testimony_quote" src="<?php echo get_template_directory_uri() ?>/img/quote.svg" alt="">
			<div class="testimony_img">
				<img src="<?php the_field("home_testimony_first_img"); ?>" alt="">
			</div>
			<div class="testimony_titles">
				<p><?php the_field("home_testimony_first_name"); ?></p>
				<p><?php the_field("home_testimony_first_job"); ?></p>
				<img src="<?php echo get_template_directory_uri() ?>/img/accueil/testimony_line_normal.svg" alt="">
			</div>
			<p class="testimony_content"><?php the_field("home_testimony_first_content"); ?></p>
		</div>
		<div class="testimony_container reverse">
			<img class="testimony_quote" src="<?php echo get_template_directory_uri() ?>/img/quote.svg" alt="">
			<p class="testimony_content"><?php the_field("home_testimony_second_content"); ?></p>
			<div class="testimony_titles">
				<p><?php the_field("home_testimony_second_name"); ?></p>
				<p><?php the_field("home_testimony_second_job"); ?></p>
				<img src="<?php echo get_template_directory_uri() ?>/img/accueil/testimony_line_reverse.svg" alt="">
			</div>
			<div class="testimony_img">
				<img src="<?php the_field("home_testimony_second_img"); ?>" alt="">
			</div>
		</div>
		<a class="link_button" href="#">Après MMI ?</a>
	</section>
</div>

<?php
	get_footer();
?>