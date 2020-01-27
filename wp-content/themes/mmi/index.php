<?php
/**
 * Template Name: Accueil
 */
?>

<?php
	get_header();
?>

<div class="wrap">

	<!-- Section Skills -->

	<section id="skills">
		<h2>LES COMPÉTENCES</h2>
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
		<a class="link_button" href="mmi-en-detail">MMI en détails</a>
		<div class="scene">
			<img data-depth="1.3" src="<?php echo get_template_directory_uri() ?>/img/accueil/skills_triangle_first.svg" alt="">
			<img data-depth="0.6" src="<?php echo get_template_directory_uri() ?>/img/accueil/skills_triangle_second.svg" alt="">
		</div>
	</section>

	<!-- Section Stats -->

	<section id="stats">
		<h2>MMI EN CHIFFRES</h2>
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
		<div class="scene" id="stats_scene_1">
			<img data-depth="0.4" src="<?php echo get_template_directory_uri() ?>/img/accueil/stats_triangle_1.svg" alt="">	
		</div>
		<div class="scene" id="stats_scene_2">
			<img data-depth="0.7" src="<?php echo get_template_directory_uri() ?>/img/accueil/stats_triangle_2.svg" alt="">
			<img data-depth="1.2" src="<?php echo get_template_directory_uri() ?>/img/accueil/stats_triangle_3.svg" alt="">
		</div>
		<div class="scene" id="stats_scene_3">
			<img data-depth="1" src="<?php echo get_template_directory_uri() ?>/img/accueil/stats_triangle_4.svg" alt="">
			<img data-depth="0.5" src="<?php echo get_template_directory_uri() ?>/img/accueil/stats_triangle_5.svg" alt="">
		</div>
	</section>

	<!-- Section Department -->

	<section id="department">
		<h2>LE DÉPARTEMENT</h2>
		<div class="main-carousel" data-flickity>
			<?php 
				$images = get_field('department_slider_gallery');
			?>
			<?php foreach( $images as $image ): ?>
	            <div class="carousel-cell">
	            	<img src="<?php echo esc_url($image['url']); ?>" alt="">
	            	<div>
		            	<span class="border top"></span>
		            	<span class="border right"></span>
		            	<span class="border bottom"></span>
		            	<span class="border left"></span>
		            </div>
	            </div>
	        <?php endforeach; ?>
		</div>
		<div class="slider_arrows">
			<img id="test_slider" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider_1_arrow_left.svg" alt="">
			<img id="test_slider_2" src="<?php echo get_template_directory_uri() ?>/img/accueil/slider_1_arrow_right.svg" alt="">
		</div>
		<a class="link_button" href="#">Voir la vidéo <span class="bold">360°</span></a>
		<div class="scene" id="department_scene_1">
			<img data-depth="0.5" src="<?php echo get_template_directory_uri() ?>/img/accueil/department_triangle_1.svg" alt="">
			<img data-depth="1.4" src="<?php echo get_template_directory_uri() ?>/img/accueil/department_triangle_2.svg" alt="">
		</div>
		<div class="scene" id="department_scene_2">
			<img data-depth="0.3" src="<?php echo get_template_directory_uri() ?>/img/accueil/department_triangle_3.svg" alt="">
			<img data-depth="0.8" src="<?php echo get_template_directory_uri() ?>/img/accueil/department_triangle_4.svg" alt="">
		</div>
	</section>

	<!-- Section Highlights -->

	<section id="highlights">
		<h2>LES TEMPS FORTS</h2>
		<div id="video">
			<?php the_field('home_highlights_video'); ?>
		</div>
		<a class="link_button" href="realisations">Voir les réalisations</a>
		<div class="scene" id="highlights_scene_1">
			<img data-depth="0.2" src="<?php echo get_template_directory_uri() ?>/img/accueil/highlights_triangle_1.svg" alt="">
			<img data-depth="0.5" src="<?php echo get_template_directory_uri() ?>/img/accueil/highlights_triangle_2.svg" alt="">
			<img data-depth="0.9" src="<?php echo get_template_directory_uri() ?>/img/accueil/highlights_triangle_3.svg" alt="">
		</div>
		<div class="scene" id="highlights_scene_2">
			<img data-depth="0.7" src="<?php echo get_template_directory_uri() ?>/img/accueil/highlights_triangle_4.svg" alt="">
			<img data-depth="0.3" src="<?php echo get_template_directory_uri() ?>/img/accueil/highlights_triangle_5.svg" alt="">
		</div>
		<div class="scene" id="highlights_scene_3">
			<img data-depth="1.2" src="<?php echo get_template_directory_uri() ?>/img/accueil/highlights_triangle_6.svg" alt="">
		</div>
	</section>

	<!-- Section International -->

	<section id="international">
		<h2>L'INTERNATIONAL</h2>
		<p>Vous souhaitez partir à l'étranger pour un stage, un S4 ou un DUETI ?</p>
		<div id="international_content">
			<div class="main-carousel" data-flickity>
	  			<?php 
					$images = get_field('international_slider_gallery');
				?>
				<?php foreach( $images as $image ): ?>
		            <div class="carousel-cell">
		            	<img src="<?php echo esc_url($image['url']); ?>" alt="">
		            	<div>
		            		<span class="border top"></span>
		            		<span class="border right"></span>
		            		<span class="border bottom"></span>
		            		<span class="border left"></span>
		            	</div>
		            </div>
		        <?php endforeach; ?>
			</div>
			<div class="slider_arrows">
				<img src="<?php echo get_template_directory_uri() ?>/img/accueil/slider_1_arrow_left.svg" alt="">
				<img src="<?php echo get_template_directory_uri() ?>/img/accueil/slider_1_arrow_right.svg" alt="">
			</div>
			<p><?php the_field('home_international_content')?></p>
		</div>
		<a class="link_button" href="international">En savoir plus</a>
		<div class="scene" id="international_scene_1">
			<img data-depth="0.4" src="<?php echo get_template_directory_uri() ?>/img/accueil/international_triangle_1.svg" alt="">
			<img data-depth="1.1" src="<?php echo get_template_directory_uri() ?>/img/accueil/international_triangle_2.svg" alt="">
		</div>
		<div class="scene" id="international_scene_2">
			<img data-depth="0.7" src="<?php echo get_template_directory_uri() ?>/img/accueil/international_triangle_3.svg" alt="">
			<img data-depth="0.3" src="<?php echo get_template_directory_uri() ?>/img/accueil/international_triangle_4.svg" alt="">
		</div>
	</section>

	<!-- Section Testimony -->

	<section id="testimony">
		<h2>LES TÉMOIGNAGES</h2>
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
		<a class="link_button" href="et-apres">Après MMI ?</a>
	</section>
</div>

<style>
	section#department .main-carousel .flickity-prev-next-button.previous {
		background-image: url("<?php echo get_template_directory_uri() ?>/img/accueil/slider_1_arrow_left.svg");
	}

	section#department .main-carousel .flickity-prev-next-button.next {
		background-image: url("<?php echo get_template_directory_uri() ?>/img/accueil/slider_1_arrow_right.svg");
	}
</style>

<?php
	get_footer();
?>