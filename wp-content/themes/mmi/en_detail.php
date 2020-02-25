<?php
/**
 * Template Name: En Détail
 */
?>

<?php
get_header();
?>
<div class="wrap">
	<section id="but">
		<h2>Le BUT</h2>

		<?php $detail_but = get_field('detail_but', $post->ID); ?>

		<div class="container right">
			<h3>Les compétences</h3>
			<?php echo($detail_but['detail_but_skills_content']); ?>
			<img class="icon" src="<?php echo get_template_directory_uri() ?>/img/en_detail/tablet.svg" alt="">
		</div>

		<p>Chaque étudiant doit valider 5 blocs de compétences pour l’obtention du BUT MMI découpés de la manière suivante :</p>

		<div id="skills">
			<?php foreach($detail_but['detail_but_skills_list'] as $title): ?>

				<div class="skills_container">
					<div>
						<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
						<h4><?php echo($title['detail_but_skills_list_title']); ?></h4>
					</div>
					<ul>

						<?php foreach($title['detail_but_skills_list_second'] as $item): ?> 

							<li><?php echo($item['detail_but_skills_list_second_item']); ?></li>

						<?php endforeach; ?>

					</ul>
				</div>

			<?php endforeach; ?>
			<img class="icon" src="<?php echo get_template_directory_uri() ?>/img/en_detail/checklist.svg" alt="">
			<img class="icon" src="<?php echo get_template_directory_uri() ?>/img/en_detail/camera.svg" alt="">
			
		</div>

		<div class="container left">
			<h3>A qui est destiné le BUT MMI ?</h3>
			<?php echo($detail_but['detail_but_forwho_content']); ?>
			<img class="icon" src="<?php echo get_template_directory_uri() ?>/img/en_detail/code.svg" alt="">
		</div>

		<div class="container right">
			<h3>Les projets</h3>
			<?php echo($detail_but['detail_but_projects_content']); ?>
		</div>
		
		<div id="years">
			<h4>Première année</h4>
			<?php echo($detail_but['detail_but_projects_years']['detail_but_projects_years_first']); ?>
			<h4>Deuxième année</h4>
			<?php echo($detail_but['detail_but_projects_years']['detail_but_projects_years_second']); ?>
			<h4>Troisième année</h4>
			<?php echo($detail_but['detail_but_projects_years']['detail_but_projects_years_third']); ?>
		</div>

		<div class="container left">
			<h3>La spécialité de MMI Chambéry</h3>
			<?php echo($detail_but['detail_but_speciality_content']); ?>
		</div>

	</section>

	<section id="department">
		<h2>Le département</h2>
		<p>Nous vous accueillons sur le site du Bourget du Lac dans des locaux équipés de matériel informatique et audiovisuel récent que les étudiants peuvent emprunter.</p>
		<div id="video">
			<?php the_field('detail_department_video'); ?>
		</div>
	</section>

	<section id="team">
		<h2>L'équipe</h2>
		<div id="teachers">

			<?php while( have_rows('detail_team') ): the_row(); 

				// vars
				$image = get_sub_field('detail_team_img');
				$name = get_sub_field('detail_team_name');
				$job = get_sub_field('detail_team_job');
				$testimony = get_sub_field('detail_team_testimony');

				?>

				<div class="column_teacher">
					<img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
					<h3><?php echo $name; ?></h3>
					<h4><?php echo $job; ?></h4>
					<p><?php echo $testimony; ?></p>
				</div>

			<?php endwhile; ?>	    
		</div>
	</section>
</div>
<?php get_footer(); ?>