<?php
/**
 * Template Name: Réalisations
 */
?>

<?php
	get_header();
?>

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

		<p class="intro">
			Au cours des trois ans, les étudiants du BUT, vont être chargés de la conception et de la création de plusieurs réalisations que ce soit sur le domaine numérique ou artistique. Cette page regroupe ainsi quelques unes des réalisations de nos étudiants.
		</p>
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
		$author = get_sub_field('auteur');
		?>

		<div class="img_container">

			<img src="<?php echo $image; ?>" alt="" />

			<div class="overlay" data-name="<?php echo $name; ?>">

				<div class="text_container">

					<?php if( $name ): ?>

						<p class="title">
							<?php echo $name; ?>
						</p>
						
					<?php endif; ?>


					<?php if( $author ): ?>

						<p class="author">
							<?php echo $author; ?>
						</p>
						
					<?php endif; ?>


				</div>

			</div>

		</div>

	<?php endwhile; ?>

<?php endif; ?>
				
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/filmframmi.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
								"À proximité"
							</p>

							<p class="author">
								Marie RAISON
							</p>
						</div>
					</div>
				</div>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/emigrant.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"Affiche E-Migrant"
							</p>

							<p class="author">
								Artur Gauthier
							</p>
						</div>
					</div>
				</div>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/semainedelentreprise.png" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"lorem ipsum"
							</p>

							<p class="author">
								John Doe
							</p>
						</div>
					</div>
				</div>
			
			
				
			</div>
			
			<div class="column">

				<?php if( have_rows('works_column_second') ): ?>


					<?php while( have_rows('works_column_second') ): the_row(); 

						// vars
						$image = get_sub_field('image');
						$name = get_sub_field('nom');
						$author = get_sub_field('auteur');
						?>

						<div class="img_container">

							<img src="<?php echo $image; ?>" alt="" />

							<div class="overlay" data-name="<?php echo $name; ?>">

								<div class="text_container">

									<?php if( $name ): ?>

										<p class="title">
											<?php echo $name; ?>
										</p>
										
									<?php endif; ?>


									<?php if( $author ): ?>

										<p class="author">
											<?php echo $author; ?>
										</p>
										
									<?php endif; ?>


								</div>

							</div>

						</div>

					<?php endwhile; ?>

				<?php endif; ?>



				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/lifi.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"Qu'est-ce que le Lifi ?"
							</p>

							<p class="author">Mathis EXERTIER & Gabriel DA COSTA</p>
						</div>
					</div>
				</div>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/Frammi.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"Site FRAMMI"
							</p>

							<p class="author">
								Emma REYMOND & Thomas GUIGNON
							</p>
						</div>
					</div>
				</div>>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/blog.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"lorem ipsum"
							</p>

							<p class="author">
								John Doe
							</p>
						</div>
					</div>
				</div>
				
			</div>




			<div class="column">

				<?php if( have_rows('works_column_third') ): ?>


					<?php while( have_rows('works_column_third') ): the_row(); 

						// vars
						$image = get_sub_field('image');
						$name = get_sub_field('nom');
						$author = get_sub_field('auteur');
						?>

						<div class="img_container">

							<img src="<?php echo $image; ?>" alt="" />

							<div class="overlay" data-name="<?php echo $name; ?>">

								<div class="text_container">

									<?php if( $name ): ?>

										<p class="title">
											<?php echo $name; ?>
										</p>
										
									<?php endif; ?>


									<?php if( $author ): ?>

										<p class="author">
											<?php echo $author; ?>
										</p>
										
									<?php endif; ?>


								</div>

							</div>

						</div>

					<?php endwhile; ?>

				<?php endif; ?>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/myrelingues.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"Myrelingues"
							</p>

							<p class="author">
								Antoine REVET
							</p>
						</div>
					</div>
				</div>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/pokedex.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"Pokedex"
							</p>

							<p class="author">
								Juliette BOIS
							</p>
						</div>
					</div>
				</div>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/charte_neon.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"Charte Graphique Agence Néon"
							</p>

							<p class="author">
								Carla REY GAUREZ
							</p>
						</div>
					</div>
				</div>
				<div class="img_container">

					<img src="<?php echo get_template_directory_uri() ?>/img/realisations/rea/syrius.jpg" alt="">
					<div class="overlay">
						<div class="text_container">
							<p class="title">
							"lorem ipsum"
							</p>

							<p class="author">
								John Doe
							</p>
						</div>
					</div>
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

		// vars
		$image = get_sub_field('image');
		$name = get_sub_field('nom');
		$author = get_sub_field('auteur');
		$linkedin = get_sub_field('auteur_linkedin');
		$category = get_sub_field('categorie');
		$year = get_sub_field('annee');
		$description = get_sub_field('description');
		$context = get_sub_field('contexte');
		$link = get_sub_field('lien_realisation');
	?>
		<div class="pop_up" data-name="<?php echo $name; ?>">
			
			<div class="background">
			</div>
			<div class="content">
				<div class="realisation">
					<img src="<?php echo $image; ?>" alt="">

					<a href="<?php echo $link; ?>">Voir la realisation</a>
				</div>

				<div class="description">
					<div>
						<h3 class="domain"><?php echo $category; ?></h3>
						<p class="date"><?php echo $year; ?></p>
					</div>
					<div class="author_and_name">
						<p class="author_and_name"><?php echo $name; ?> par <span class="author_bold"><?php echo $author; ?></span></p>

						<?php if ($linkedin) : ?>

							<div>
								<a href=" <?php echo $linkedin; ?>"><img src="<?php echo get_template_directory_uri() ?>/img/realisations/linkedin.png"/></a>
							</div>

						<?php endif; ?>

					</div>



					<?php the_sub_field('contexte') ?>

					<?php the_sub_field('description') ?>

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

		// vars
		$image = get_sub_field('image');
		$name = get_sub_field('nom');
		$author = get_sub_field('auteur');
		$linkedin = get_sub_field('auteur_linkedin');
		$category = get_sub_field('categorie');
		$year = get_sub_field('annee');
		$description = get_sub_field('description');
		$context = get_sub_field('contexte');
		$link = get_sub_field('lien_realisation');
	?>
		<div class="pop_up" data-name="<?php echo $name; ?>">
			
			<div class="background">
			</div>
			<div class="content">
				<div class="realisation">
					<img src="<?php echo $image; ?>" alt="">

					<a href="<?php echo $link; ?>">Voir la realisation</a>
				</div>

				<div class="description">
					<div>
						<h3 class="domain"><?php echo $category; ?></h3>
						<p class="date"><?php echo $year; ?></p>
					</div>
					<div>
						<p class="author_and_name"><?php echo $name; ?> par <span class="author_bold"><?php echo $author; ?></span></p>

						<?php if ($linkedin) : ?>

							<div>
								<a href=" <?php echo $linkedin; ?>"><img src="<?php echo get_template_directory_uri() ?>/img/realisations/linkedin.png"/></a>
							</div>

						<?php endif; ?>

					</div>



					<p class="mention"> <?php the_sub_field('context') ?> </a></p>

					<p class="description"> <?php the_sub_field('description') ?></p>

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

		// vars
		$image = get_sub_field('image');
		$name = get_sub_field('nom');
		$author = get_sub_field('auteur');
		$linkedin = get_sub_field('auteur_linkedin');
		$category = get_sub_field('categorie');
		$year = get_sub_field('annee');
		$description = get_sub_field('description');
		$context = get_sub_field('contexte');
		$link = get_sub_field('lien_realisation');
	?>
		<div class="pop_up" data-name="<?php echo $name; ?>">
			<?php var_dump($name);?>
			
			<div class="background">
			</div>
			<div class="content">
				<div class="realisation">
					<img src="<?php echo $image; ?>" alt="">

					<a href="<?php echo $link; ?>">Voir la realisation</a>

				</div>

				<div class="description">
					<div>
						<h3 class="domain"><?php echo $category; ?></h3>
						<p class="date"><?php echo $year; ?></p>
					</div>
					<div>
						<p class="author_and_name"><?php echo $name; ?> par <span class="author_bold"><?php echo $author; ?></span></p>

						<?php if ($linkedin) : ?>

							<div>
								<a href=" <?php echo $linkedin; ?>"><img src="<?php echo get_template_directory_uri() ?>/img/realisations/linkedin.png"/></a>
							</div>

						<?php endif; ?>

					</div>



					<p class="mention"> <?php the_sub_field('context') ?> </a></p>

					<p class="description"> <?php the_sub_field('description') ?></p>
				</div>

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



<?php
	get_footer();
?>