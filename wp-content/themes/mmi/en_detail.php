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


		<div class="container right">
			<h3>Les compétences</h3>
			<p>Le Bachelor Universitaire de Technologie (BUT) « Métiers du Multimédia et de l’Internet » (MMI) se déroule en 3 ans, découpés en 6 semestres, sur un volume total de 2000 heures de cours en présence d’un enseignant. A cela s’ajoutent 600 heures de projet réparties sur les 3 années.</p>
		</div>

		<p>Chaque étudiant doit valider 5 blocs de compétences pour l’obtention du BUT MMI découpés de la manière suivante :</p>

		<div id="skills">
			<!-- <?php while( have_rows('detail_skills') ): the_row(); 

				// vars
				$image = get_sub_field('detail_team_img');
				$name = get_sub_field('detail_team_name');
				$job = get_sub_field('detail_team_job');
				$testimony = get_sub_field('detail_team_testimony');

				?>

				

			<?php endwhile; ?> -->
			<div class="skills_container">
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de produire du contenu multimédia</h4>
				</div>
				<ul>
					<li>en respectant les contraintes techniques du milieu professionnel en vigueur</li>
					<li>en considérant les normes de numérisation et leur impact</li>
					<li>en sachant choisir et utiliser le matériel et logiciels adéquats</li>
					<li>en faisant preuve d'invention et de créativité dans l'utilisation des outils</li>
					<li>en mettant en œuvre les fondamentaux des langages plastiques et filmiques</li>
				</ul>
			</div>
			<div class="skills_container">
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de programmer pour le web</h4>
				</div>
				<ul>
					<li>en étant capable de s'adapter aux différentes technologies</li>
					<li>en produisant en mettant en œuvre des algorithmes répondant aux problématiques</li>
					<li>en respectant les normes et standards du web</li>
					<li>en adaptant la présentation du contenu au support et aux utilisateurs</li>
				</ul>
			</div>	
			<div class="skills_container">
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de mettre en place et administrer des systèmes d'information</h4>
				</div>
				<ul>
					<li>en s'appuyant sur des modèles existants</li>
					<li>en respectant les contraintes de légalité et de sécurité</li>
					<li>en utilisant des logiciels et outils de gestion de base de données</li>
					<li>en gérant et mettant en œuvre une configuration matérielle et logicielle locale ou en réseau</li>
				</ul>
			</div>	
			<div class="skills_container">
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable de gérer un projet numérique</h4>
				</div>
				<ul>
					<li>en concevant et préparant la mise en œuvre du projet</li>
					<li>en réceptionnant la demande</li>
					<li>en ayant une stratégie d'organisation du travail</li>
					<li>en développant une communication adaptée à la conduite du projet</li>
				</ul>
			</div>	
			<div class="skills_container">
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/img/en_detail/plus.svg" alt="plus">
					<h4>Savoir et être capable d'élaborer et rédiger des contenus </h4>
				</div>
				<ul>
					<li>en déterminant les enjeux, les cibles et les objectifs de communication adéquats</li>
					<li>en mobilisant les univers de sens pertinents</li>
					<li>en concevant des contenus adaptés à des supports divers et variés</li>
					<li>en respectant une stratégie de communication</li>
				</ul>
			</div>	
		</div>

		<div class="container left">
			<h3>A qui est destiné le BUT MMI ?</h3>
			<p>Notre objectif est de composer une promotion avec :
-	50% de bacheliers technologiques, de préférence issus de la filière STI2D 
option SIN, avec un excellent dossier.
-	50% de bacheliers généraux, avec des options scientifiques.
Dans l’idéal le candidat au BUT MMI aura également une ouverture à la culture 
artistique et esthétique.</p>
		</div>

		<div class="container right">
			<h3>Les projets</h3>
			<p>Les projets sont au coeur de la formation MMI. Ils permettent aux étudiants de mettre 
en application pratique des savoirs théoriques. Grâce aux projets tuteurés, les étudiants 
peuvent présenter des réalisations de qualité pour leur devenir professionnel (stage, 
alternance ou emploi).</p>
		</div>
		




		<div id="years">
			<h4>Première année</h4>
			<p>Réalisation et mise en oeuvre d’une exposition multimédia : conception 
des oeuvres et des outils de communication relatifs à l’exposition. </p>
			<h4>Deuxième année</h4>
			<p>Constitués en agences, les étudiants répondent à un besoin réel issu 
d’un client : création de sites web, conception de produits audiovisuels, 
stratégie de communication…</p>
			<h4>Troisième année</h4>
			<p>Stage en entreprise et possibilité d'alternance</p>
		</div>








		<div class="container left">
			<h3>La spécialité de MMI Chambéry</h3>
			<p>Notre objectif est de composer une promotion avec :
-	50% de bacheliers technologiques, de préférence issus de la filière STI2D 
option SIN, avec un excellent dossier.
-	50% de bacheliers généraux, avec des options scientifiques.
Dans l’idéal le candidat au BUT MMI aura également une ouverture à la culture 
artistique et esthétique.</p>
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