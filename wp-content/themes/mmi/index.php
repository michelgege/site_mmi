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
			<?php the_field('home_skills_content'); ?>
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
			<?php while( have_rows('home_numbers') ): the_row(); 

				// vars
				$number = get_sub_field('home_numbers_content');
				$desc = get_sub_field('home_numbers_desc');

				?>

				<div class="stats_content">
					<div>
						<p><?php echo $number; ?></p>
					</div>
					<p><?php echo $desc; ?></p>
				</div>

			<?php endwhile; ?>
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
	            	<img src="<?php echo esc_url($image['url']); ?>" alt="Photo slider">
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
		<a class="link_button" href="mmi-en-detail.video">Voir la vidéo <span class="bold">360°</span></a>
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
		<p>Vous souhaitez partir à l'étranger pour un stage, ou un semestre ?</p>
		<div id="international_content">
			<div class="main-carousel" data-flickity>
	  			<?php 
					$images = get_field('home_international_slider_gallery');
				?>
				<?php foreach( $images as $image ): ?>
		            <div class="carousel-cell">
		            	<img src="<?php echo esc_url($image['url']); ?>" alt="Photo Slider">
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
		<?php if( have_rows('home_testimonials') ): ?>

			<?php while( have_rows('home_testimonials') ): the_row(); 

				// vars
				$image = get_sub_field('home_testimony_img');
				$name = get_sub_field('home_testimony_name');
				$job = get_sub_field('home_testimony_job');
				$content = get_sub_field('home_testimony_content');

				?>

				<div class="testimony_container">
					<img class="testimony_quote" src="<?php echo get_template_directory_uri() ?>/img/quote.svg" alt="">
					<div class="testimony_img">
						<img src="<?php echo $image; ?>" alt="Photo de profil">
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