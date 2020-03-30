<?php
/**
 * Template Name: Réalisations
 */
?>

<?php
	get_header();
?>

<section>
	

	<div class="wrap">
		
		<h2>Réalisations</h2>

		<div class="inner_wrap">
			<div id="scene" class="scene">
				<div data-depth="-0.80">
					<img class="grey_triangle_empty_2" src="<?php echo get_template_directory_uri() ?>/img/realisations/grey_triangle_empty_2.svg" alt=""> 
				</div>

				<div data-depth="1.50">
					<img class="white_triangle_full" src="<?php echo get_template_directory_uri() ?>/img/realisations/white_triangle_full.svg" alt="">
				</div>
				<div data-depth="-0.25">
					<img class="pink_square_full" src="<?php echo get_template_directory_uri() ?>/img/realisations/pink_square_full.svg" alt="">
				</div>
			</div>

			<div class="intro">
				<?php the_field('intro'); ?>
			</div>

			<div id="scene_two" class="scene">
				<img data-depth="-1.20" class="white_triangle_full" src="<?php echo get_template_directory_uri() ?>/img/realisations/white_triangle_full.svg" alt="">
				<img  data-depth="0.90" class="purple_trangle_full" src="<?php echo get_template_directory_uri() ?>/img/realisations/purple_trangle_full.svg" alt="">
			</div>
			
			
			<div class="column_container">

				<div class="column">

	<?php if( have_rows('works_column_first') ): ?>


		<?php while( have_rows('works_column_first') ): the_row(); 

			// vars
			$image = get_sub_field('image');
			$name = get_sub_field('nom');
			$type = get_sub_field('categorie');
			?>

			<div class="img_container" data-aos="zoom-in">

				<img src="<?php echo $image; ?>" alt="" />

				<div class="overlay" data-name="<?php echo str_replace('"', '', $name); ?>">

					<div class="text_container">

						<?php if( $name ): ?>

							<p class="title">
								<?php echo $name; ?>
							</p>
							
						<?php endif; ?>

							<p class="author">
								<?php echo $type; ?>
							</p>

					</div>

				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

			</div>
				

	<div class="column">

	<?php if( have_rows('works_column_second') ): ?>


		<?php while( have_rows('works_column_second') ): the_row(); 

			// vars
			$image = get_sub_field('image');
			$name = get_sub_field('nom');
			$type = get_sub_field('categorie');
			?>

			<div class="img_container" data-aos="zoom-in">

				<img src="<?php echo $image; ?>" alt="" />

				<div class="overlay" data-name="<?php echo str_replace('"', '', $name); ?>">

					<div class="text_container">

						<?php if( $name ): ?>

							<p class="title">
								<?php echo $name; ?>
							</p>
							
						<?php endif; ?>

							<p class="author">
								<?php echo $type; ?>
							</p>

					</div>

				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

			</div>


			<div class="column">

	<?php if( have_rows('works_column_third') ): ?>


		<?php while( have_rows('works_column_third') ): the_row(); 

			// vars
			$image = get_sub_field('image');
			$name = get_sub_field('nom');
			$type = get_sub_field('categorie');
			?>

			<div class="img_container" data-aos="zoom-in">

				<img src="<?php echo $image; ?>" alt="" />

				<div class="overlay" data-name="<?php echo str_replace('"', '', $name); ?>">

					<div class="text_container">

						<?php if( $name ): ?>

							<p class="title">
								<?php echo $name; ?>
							</p>
							
						<?php endif; ?>

							<p class="author">
								<?php echo $type; ?>
							</p>

					</div>

				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

			</div>
				
					
				</div>
					
					
				</div>
			</div>

		</div>
	

	<div id="scene_third" class="scene">
		<img data-depth="-0.80" src="<?php echo get_template_directory_uri() ?>/img/realisations/pink_triangle_empty.svg" alt="">
		<img data-depth="-1.50" class="white_triangle_full" src="<?php echo get_template_directory_uri() ?>/img/realisations/white_triangle_full.svg" alt="">
	</div>
	<div id="scene_fourth" class="scene">
		<img data-depth="0.20" class="white_triangle_full" src="<?php echo get_template_directory_uri() ?>/img/realisations/white_triangle_full.svg" alt="">
		<img data-depth="0.10"class="grey_triangle_empty" src="<?php echo get_template_directory_uri() ?>/img/realisations/grey_triangle_empty.svg" alt="">
		<img data-depth="-0.10"class="pink_square_full" src="<?php echo get_template_directory_uri() ?>/img/realisations/pink_square_full.svg" alt="">
	</div>



	<?php if( have_rows('works_column_first') ): ?>

		<?php while( have_rows('works_column_first') ): the_row(); 

			$image = get_sub_field('image');
			$name = get_sub_field('nom'); 
			$gallery = get_sub_field('gallery');
			$author = get_sub_field('auteur');
			$category = get_sub_field('categorie');
			$year = get_sub_field('annee');
			$description = get_sub_field('description');
			$context = get_sub_field('contexte');
			$video = get_sub_field('video');
			$link =  get_sub_field('lien_realisation');

		?>
			<div class="pop_up" data-name="<?php echo str_replace('"', '', $name); ?>">
				
				<div class="background">
				</div>


				<div class="content">

					<div class="title_and_date">
						<p><?php echo $name; ?></p>
						<p><?php echo $year; ?></p>
					</div>

					<div>

						
						
						<div class="realisation">
							<?php if ($video) : ?>
								
								<div class="iframe_container">
									<?php echo($video); ?>
								</div>

							<?php else: ?>

							<?php if ($link) : ?>
							<a target="_blank" href="<?php echo($link); ?>">
							<?php endif; ?>

								<img src="<?php echo $image; ?>" alt="">
							
							<?php if ($link) : ?>
							</a>
							<?php endif; ?>
																			

							<?php endif; ?>
				
						</div>


						<div class="description">

							<h3 class="domain"><?php echo $category; ?></h3>

							<div class="context"><?php the_sub_field('contexte') ?></div>

							<div class="author_and_name">
								<p class="author_and_name">Par <span class="author_bold"><?php echo $author; ?></span></p>
							</div>

							<?php the_sub_field('description') ?>

						</div>
					</div>


					<div class="gallery_container">

						<?php foreach ($gallery as $img) : ?>
							
							<div data-aos="fade-up">
								<img src="<?php echo $img['url']; ?>">
							</div>

						
						<?php endforeach ?>
			
					</div>

					

		

				

				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58">
			  <g id="Groupe_61" data-name="Groupe 61" transform="translate(-1739 -434)">
			    <g id="Groupe_60" data-name="Groupe 60" transform="translate(-53.279 -0.785)">
			      <line id="Ligne_9" data-name="Ligne 9" x1="28.441" y2="28.441" transform="translate(1807.279 449.785)" fill="none" stroke="#fff" stroke-width="3"/>
			      <line id="Ligne_10" data-name="Ligne 10" x1="28.441" y2="28.441" transform="translate(1835.721 449.785) rotate(90)" fill="none" stroke="#fff" stroke-width="3"/>
			    </g>
			    <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(1739 434)" fill="none" stroke="#fff" stroke-width="3">
			      <circle cx="29" cy="29" r="29" stroke="none"/>
			      <circle cx="29" cy="29" r="27.5" fill="none"/>
			    </g>
			  </g>
			</svg>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>



<?php if( have_rows('works_column_second') ): ?>

		<?php while( have_rows('works_column_second') ): the_row(); 

			$image = get_sub_field('image');
			$name = get_sub_field('nom'); 
			$gallery = get_sub_field('gallery');
			$author = get_sub_field('auteur');
			$category = get_sub_field('categorie');
			$year = get_sub_field('annee');
			$description = get_sub_field('description');
			$context = get_sub_field('contexte');
			$video = get_sub_field('video');
			$link = get_sub_field('lien_realisation');

		?>
			<div class="pop_up" data-name="<?php echo str_replace('"', '', $name); ?>">
				
				<div class="background">
				</div>


				<div class="content">

					<div class="title_and_date">
						<p><?php echo $name; ?></p>
						<p><?php echo $year; ?></p>
					</div>

					<div>

						
						<div class="realisation">
							<?php if ($video) : ?>
								
								<div class="iframe_container">
									<?php echo($video); ?>
								</div>

							<?php else: ?>

								<?php if ($link) : ?>
								<a target="_blank" href="<?php echo($link); ?>">
								<?php endif; ?>

								<img src="<?php echo $image; ?>" alt="">

								<?php if ($link) : ?>
								</a>
								<?php endif; ?>


							<?php endif; ?>
							

						</div>


						<div class="description">

							<h3 class="domain"><?php echo $category; ?></h3>

							<div class="context"><?php the_sub_field('contexte') ?></div>

							<div class="author_and_name">
								<p class="author_and_name">par <span class="author_bold"><?php echo $author; ?></span></p>
							</div>

							<?php the_sub_field('description') ?>

						</div>
					</div>


					<div class="gallery_container">

						<?php foreach ($gallery as $img) : ?>

							<img src="<?php echo $img['url']; ?>">
						
						<?php endforeach ?>
						
					</div>

					

		

				

				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58">
			  <g id="Groupe_61" data-name="Groupe 61" transform="translate(-1739 -434)">
			    <g id="Groupe_60" data-name="Groupe 60" transform="translate(-53.279 -0.785)">
			      <line id="Ligne_9" data-name="Ligne 9" x1="28.441" y2="28.441" transform="translate(1807.279 449.785)" fill="none" stroke="#fff" stroke-width="3"/>
			      <line id="Ligne_10" data-name="Ligne 10" x1="28.441" y2="28.441" transform="translate(1835.721 449.785) rotate(90)" fill="none" stroke="#fff" stroke-width="3"/>
			    </g>
			    <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(1739 434)" fill="none" stroke="#fff" stroke-width="3">
			      <circle cx="29" cy="29" r="29" stroke="none"/>
			      <circle cx="29" cy="29" r="27.5" fill="none"/>
			    </g>
			  </g>
			</svg>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

	<?php if( have_rows('works_column_third') ): ?>

		<?php while( have_rows('works_column_third') ): the_row(); 

			$image = get_sub_field('image');
			$name = get_sub_field('nom'); 
			$gallery = get_sub_field('gallery');
			$author = get_sub_field('auteur');
			$category = get_sub_field('categorie');
			$year = get_sub_field('annee');
			$description = get_sub_field('description');
			$context = get_sub_field('contexte');
			$video = get_sub_field('video');
			$link = get_sub_field('lien_realisation');

		?>
			<div class="pop_up" data-name="<?php echo str_replace('"', '', $name); ?>">
				
				<div class="background">
				</div>


				<div class="content">

					<div class="title_and_date">
						<p><?php echo $name; ?></p>
						<p><?php echo $year; ?></p>
					</div>

					<div>

						<?php if ($link) : ?>
						<a target="_blank" href="<?php echo($link); ?>">
						<?php endif; ?>

						
							<div class="realisation">
								<?php if ($video) : ?>
									
									<div class="iframe_container">
										<?php echo($video); ?>
									</div>

								<?php else: ?>

								<?php if ($link) : ?>
								<a target="_blank" href="<?php echo($link); ?>">
								<?php endif; ?>

									<img src="<?php echo $image; ?>" alt="">
									<?php if ($link) : ?>

								</a>
								<?php endif; ?>

								<?php endif; ?>	
							</div>
						

						



						<div class="description">

							<h3 class="domain"><?php echo $category; ?></h3>

							<div class="context"><?php the_sub_field('contexte') ?></div>

							<div class="author_and_name">
								<p class="author_and_name">par <span class="author_bold"><?php echo $author; ?></span></p>

							</div>

							<?php the_sub_field('description') ?>

						</div>
					</div>


					<div class="gallery_container">

						<?php foreach ($gallery as $img) : ?>
			
							<img src="<?php echo $img['url']; ?>">
	
						<?php endforeach ?>
						
					</div>

					

		

				

				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58">
			  <g id="Groupe_61" data-name="Groupe 61" transform="translate(-1739 -434)">
			    <g id="Groupe_60" data-name="Groupe 60" transform="translate(-53.279 -0.785)">
			      <line id="Ligne_9" data-name="Ligne 9" x1="28.441" y2="28.441" transform="translate(1807.279 449.785)" fill="none" stroke="#fff" stroke-width="3"/>
			      <line id="Ligne_10" data-name="Ligne 10" x1="28.441" y2="28.441" transform="translate(1835.721 449.785) rotate(90)" fill="none" stroke="#fff" stroke-width="3"/>
			    </g>
			    <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(1739 434)" fill="none" stroke="#fff" stroke-width="3">
			      <circle cx="29" cy="29" r="29" stroke="none"/>
			      <circle cx="29" cy="29" r="27.5" fill="none"/>
			    </g>
			  </g>
			</svg>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>
</section>



<?php
	get_footer();
?>