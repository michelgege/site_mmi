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


		<div class="container">
			<h3>Les compétences</h3>
			<?php the_field('detail_but_skills_content'); ?>
		</div>

		<p></p>

		<div id="skills">
			<?php while( have_rows('detail_skills') ): the_row(); 

				// vars
				$image = get_sub_field('detail_team_img');
				$name = get_sub_field('detail_team_name');
				$job = get_sub_field('detail_team_job');
				$testimony = get_sub_field('detail_team_testimony');

				?>

				<div class="skills_container">
					<div>
						<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
						<h4>Savoir et être capable de produire du contenu multimédia</h4>
					</div>
					<ul>
						<li>en respectant les contraintes techniques du milieu professionnel en vigueur</li>
						<li>en respectant les contraintes techniques du milieu professionnel en vigueur</li>
						<li>en respectant les contraintes techniques du milieu professionnel en vigueur</li>
						<li>en respectant les contraintes techniques du milieu professionnel en vigueur</li>
						<li>en respectant les contraintes techniques du milieu professionnel en vigueur</li>
					</ul>
				</div>	

			<?php endwhile; ?>
		</div>




		<img class="tablet" src="<?php echo get_template_directory_uri() ?>/img/en_detail/tablet.svg" alt="tablette graphique">
		<h3 class="left_title"><?php the_field('detail_first_title'); ?></h3>
		<p class="competences_1"><?php the_field('detail_description_but'); ?></p>

		<p class="competences_2"><?php the_field('detail_intro_competence'); ?>:</p>

		<img class="checklist" src="<?php echo get_template_directory_uri() ?>/img/en_detail/checklist.svg" alt="checklist">
		<img class="camera" src="<?php echo get_template_directory_uri() ?>/img/en_detail/camera.svg" alt="camera">

		<div class="competences_deroulantes">
			<div class="competence">
				<div class="titre" data-id="1">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4><?php the_field('detail_title_competence_1'); ?></h4>
				</div>
				<div class="content" data-id="1">
					<p>- <?php the_field('detail_develop_competence_1.1'); ?></p>
					<p>- <?php the_field('detail_develop_competence_1.2'); ?></p>
					<p>- <?php the_field('detail_develop_competence_1.3'); ?></p>
					<p>- <?php the_field('detail_develop_competence_1.4'); ?></p>
					<p>- <?php the_field('detail_develop_competence_1.5'); ?></p>
				</div>
			</div>

			<div class="competence">
				<div class="titre" data-id="2">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4><?php the_field('detail_title_competence_2'); ?></h4>
				</div>
				<div class="content" data-id="2">
					<p>- <?php the_field('detail_develop_competence_2.1'); ?></p>
					<p>- <?php the_field('detail_develop_competence_2.2'); ?></p>
					<p>- <?php the_field('detail_develop_competence_2.3'); ?></p>
					<p>- <?php the_field('detail_develop_competence_2.4'); ?></p>
				</div>

			</div>

			<div class="competence">
				<div class="titre" data-id="3">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4><?php the_field('detail_title_competence_3'); ?></h4>
				</div>
				<div class="content" data-id="3">
					<p>- <?php the_field('detail_develop_competence_3.1'); ?></p>
					<p>- <?php the_field('detail_develop_competence_3.2'); ?></p>
					<p>- <?php the_field('detail_develop_competence_3.3'); ?></p>
					<p>- <?php the_field('detail_develop_competence_3.4'); ?></p>
				</div>
			</div>

			<div class="competence">
				<div class="titre" data-id="4">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4><?php the_field('detail_title_competence_4'); ?></h4>
				</div>
				<div class="content" data-id="4">
					<p>- <?php the_field('detail_develop_competence_4.1'); ?></p>
					<p>- <?php the_field('detail_develop_competence_4.2'); ?></p>
					<p>- <?php the_field('detail_develop_competence_4.3'); ?></p>
					<p>- <?php the_field('detail_develop_competence_4.4'); ?></p>
				</div>
			</div>

			<div class="competence">
				<div class="titre" data-id="5">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4><?php the_field('detail_title_competence_5'); ?></h4>
				</div>
				<div class="content" data-id="5">
					<p>- <?php the_field('detail_develop_competence_5.1'); ?></p>
					<p>- <?php the_field('detail_develop_competence_5.2'); ?></p>
					<p>- <?php the_field('detail_develop_competence_5.3'); ?></p>
					<p>- <?php the_field('detail_develop_competence_5.4'); ?></p>
				</div>
			</div>



		</div>

	</section>

	<div id="destiny">
		<img class="code" src="<?php echo get_template_directory_uri() ?>/img/en_detail/code.svg" alt="code">
		<h3 class="right_title"> A qui est destiné le BUT MMI ? </h3>
		<p class="content_right"> Notre objectif est de composer une promotion avec : </p>
		<p class="content_right">-	50% de bacheliers technologiques, de préférence issus de la filière STI2D option SIN, avec un excellent dossier.</p>
		<p class="content_right">-	50% de bacheliers généraux, avec des options scientifiques.</p>
		<p class="content_right">Dans l’idéal le candidat au BUT MMI aura également une ouverture à la culture artistique et esthétique. </p>
	</div>



	<h3 class="left_title"> Les projets </h3>
	<p class="content_left">Les projets sont au coeur de la formation MMI. Ils permettent aux étudiants de mettre 
		en application pratique des savoirs théoriques. Grâce aux projets tuteurés, les étudiants 
		peuvent présenter des réalisations de qualité pour leur devenir professionnel (stage, 
	alternance ou emploi).</p>



	<div id="wrap_year">
		<div id="number_one">
			<h4 class="year"> Première année </h4>
			<p class="content_center">Réalisation et mise en oeuvre d’une exposition multimédia : conception des oeuvres et des outils de communication relatifs à l’exposition. </p>
		</div>
		<div id="number_two">
			<h4 class="year"> Deuxième année </h4>
			<p class="content_center">Constitués en agences, les étudiants répondent à un besoin réel issu d’un client : création de sites web, conception de produits audiovisuels, stratégie de communication… </p>
		</div>
		<div id="number_three">
			<h4 class="year"> Troisième année </h4>
			<p class="content_center">Stage en entreprise et possibilité d'alternance </p>
		</div>
	</div>


	<div id="after_content_purple">
		<h3 class="right_title"> La spécialité de MMI Chambéry </h3>
		<p class="content_right"> Notre objectif est de composer une promotion avec : </p>
		<p class="content_right">-	50% de bacheliers technologiques, de préférence issus de la filière STI2D option SIN, avec un excellent dossier.</p>
		<p class="content_right">-	50% de bacheliers généraux, avec des options scientifiques.</p>
		<p class="content_right">Dans l’idéal le candidat au BUT MMI aura également une ouverture à la culture artistique et esthétique. </p>
	</div>



















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