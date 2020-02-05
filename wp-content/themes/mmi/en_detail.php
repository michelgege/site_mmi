<?php
/**
 * Template Name: En Détail
 */
?>

<?php
get_header();
?>
<div class="wrap_d">

	<div id="scene" class="scene">
		<div  class="layer" data-depth="0.10">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/top_triangle_purple.svg" id="top_triangle_purple" alt="top_triangle_purple">
		</div> 
		<div  class="layer" data-depth="0.40">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/top_triangle_white.svg" id="top_triangle_white" alt="top_triangle_white">
		</div> 
	</div>

	<section class="le_but">
		<h2>Le BUT</h2>
		<img class="tablet" src="<?php echo get_template_directory_uri() ?>/img/en_detail/tablet.svg" alt="tablette graphique">
		<h3 class="left_title"><?php the_field('detail_first_title'); ?></h3>
		<p class="competences_1">Le <span>Bachelor Universitaire de Technologie</span> (BUT) « Métiers du Multimédia et de l’Internet » (MMI) se déroule en <span>3 ans</span>, découpés en <span>6 semestres</span>, sur un volume total de <span>2000 heures de cours</span> en présence d’un enseignant. A cela s’ajoutent 600 heures de projet réparties sur les 3 années.</p>

		<p class="competences_2">Chaque étudiant doit valider 5 blocs de compétences pour l’obtention du BUT MMI découpés de la manière suivante :</p>

		<img class="checklist" src="<?php echo get_template_directory_uri() ?>/img/en_detail/checklist.svg" alt="checklist">
		<img class="camera" src="<?php echo get_template_directory_uri() ?>/img/en_detail/camera.svg" alt="camera">

		<div class="competences_deroulantes">
			<div class="competence">
				<div class="titre" data-id="1">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de produire du contenu multimédia</h4>
				</div>
				<div class="content" data-id="1">
					<p>- en respectant les contraintes techniques du milieu professionnel en vigueur</p>
					<p>- en considérant les normes de numérisation et leur impact</p>
					<p>- en sachant choisir et utiliser le matériel et logiciels adéquats</p>
					<p>- en faisant preuve d'invention et de créativité dans l'utilisation des outils</p>
					<p>- en mettant en œuvre les fondamentaux des langages plastiques et filmiques</p>
				</div>
			</div>

			<div class="competence">
				<div class="titre" data-id="2">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de programmer pour le web</h4>
				</div>
				<div class="content" data-id="2">
					<p>- en étant capable de s'adapter aux différentes technologies</p>
					<p>- en produisant en mettant en œuvre des algorithmes répondant aux problématiques</p>
					<p>- en respectant les normes et standards du web</p>
					<p>- en adaptant la présentation du contenu au support et aux utilisateurs</p>
				</div>

			</div>

			<div class="competence">
				<div class="titre" data-id="3">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de mettre en place et administrer des systèmes d'information</h4>
				</div>
				<div class="content" data-id="3">
					<p>- en s'appuyant sur des modèles existants</p>
					<p>- en respectant les contraintes de légalité et de sécurité</p>
					<p>- en utilisant des logiciels et outils de gestion de base de données</p>
					<p>- en gérant et mettant en œuvre une configuration matérielle et logicielle locale ou en réseau</p>
				</div>
			</div>

			<div class="competence">
				<div class="titre" data-id="4">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de gérer un projet numérique</h4>
				</div>
				<div class="content" data-id="4">
					<p>- en concevant et préparant la mise en œuvre du projet</p>
					<p>- en réceptionnant la demande</p>
					<p>- en ayant une stratégie d'organisation du travail</p>
					<p>- en développant une communication adaptée à la conduite du projet</p>
				</div>
			</div>

			<div class="competence">
				<div class="titre" data-id="5">
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable d'élaborer et rédiger des contenus </h>
				</div>
				<div class="content" data-id="5">
					<p>- en déterminant les enjeux, les cibles et les objectifs de communication adéquats</p>
					<p>- en mobilisant les univers de sens pertinents</p>
					<p>- en concevant des contenus adaptés à des supports divers et variés</p>
					<p>- en respectant une stratégie de communication</p>
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



	<div id="scene" class="scene">
		<div  class="layer" data-depth="0.10">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/mid_triangle_white.svg" id="mid_triangle_white" alt="mid_triangle_white">
		</div> 
		<div  class="layer" data-depth="0.40">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/mid_triangle_border_purple.svg" id="mid_triangle_border_purple" alt="mid_triangle_border_purple">
		</div> 
	</div>
</div>

	<div id="wrap_year">
		<div id="number_one">
			<h3 class="year"> Première année </h3>
			<p class="content_center">Réalisation et mise en oeuvre d’une exposition multimédia : conception des oeuvres et des outils de communication relatifs à l’exposition. </p>
		</div>
		<div id="number_two">
			<h3 class="year"> Deuxième année </h3>
			<p class="content_center">Constitués en agences, les étudiants répondent à un besoin réel issu d’un client : création de sites web, conception de produits audiovisuels, stratégie de communication… </p>
		</div>
		<div id="number_three">
			<h3 class="year"> Troisième année </h3>
			<p class="content_center">Stage en entreprise et possibilité d'alternance </p>
		</div>
	</div>

<div class="wrap_d">
	<div id="scene" class="scene">
		<div  class="layer" data-depth="0.10">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/mid_triangle_border_white.svg" id="mid_triangle_border_white" alt="mid_triangle_border_white">
		</div> 
		<div  class="layer" data-depth="0.40">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/medium_mid_triangle_white.svg" id="medium_mid_triangle_white" alt="medium_mid_triangle_white">
		</div> 
		<div  class="layer" data-depth="0.80">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/small_mid_triangle_white.svg" id="small_mid_triangle_white" alt="small_mid_triangle_white">
		</div> 
	</div>


	<div id="after_content_purple">
		<h3 class="right_title"> La spécialité de MMI Chambéry </h3>
		<p class="content_right"> Notre objectif est de composer une promotion avec : </p>
		<p class="content_right">-	50% de bacheliers technologiques, de préférence issus de la filière STI2D option SIN, avec un excellent dossier.</p>
		<p class="content_right">-	50% de bacheliers généraux, avec des options scientifiques.</p>
		<p class="content_right">Dans l’idéal le candidat au BUT MMI aura également une ouverture à la culture artistique et esthétique. </p>
	</div>



	<section class="departement">
		<h2>Le département</h2>
		<div class="intro">
			<p >Nous vous accueillons sur le site du Bourget du Lac dans des locaux équipés de matériel informatique et 
			audiovisuel récent que les étudiants peuvent emprunter.</p>
			<div class="video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/GiRjmLiyoe8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</section>


	<div id="scene" class="scene"> 
		<div  class="layer" data-depth="0.20">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/bottom_triangle_border_grey.svg" id="bottom_triangle_border_grey" alt="bottom_triangle_border_grey">
		</div> 
		<div  class="layer" data-depth="0.30">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/bottom_triangle_white.svg" id="bottom_triangle_white" alt="bottom_triangle_white">
		</div> 
		<div  class="layer" data-depth="0.10">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/bottom_square_purple.svg" id="bottom_square_purple" alt="bottom_square_purple">
		</div>
	</div>


<div id="scene" class="scene"> 
<div  class="layer" data-depth="0.30">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/bottom_triangle_purple.svg" id="bottom_triangle_purple" alt="bottom_triangle_purple">
		</div> 
		<div  class="layer" data-depth="0.20">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/bottom_rectangle_grey.svg" id="bottom_rectangle_grey" alt="bottom_rectangle_grey">
		</div>
		<div  class="layer" data-depth="0.10">
			<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/bottom_triangle_border_purple.svg" id="bottom_triangle_border_purple" alt="bottom_triangle_border_purple">
		</div> 
	</div>
	<section id="teams">
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
					<div id="after_picture">
						<img src="<?php echo $image; ?>" id="team_picture" alt="">
					</div>
					<h3 class="name"><?php echo $name; ?></h3>
					<h3 class="profesion"><?php echo $job; ?></h3>
					<p class="testimony"><?php echo $testimony; ?></p>
				</div>

			<?php endwhile; ?>	    
		</div>
		
	</section>
</div>
			
			
	



	</section>
</div>




<?php
get_footer();
?>