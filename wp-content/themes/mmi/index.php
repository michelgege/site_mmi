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
			<p>Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles. Mais s'est aussi adapté à la bureautique.</p>
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
					<p>90%</p>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur</p>
			</div>
			<div class="stats_content">
				<div>
					<p>60</p>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur</p>
			</div>
			<div class="stats_content">
				<div>
					<p>15 257</p>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur</p>
			</div>
			<div class="stats_content">
				<div>
					<p>588</p>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur</p>
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

	<div class="scene"></div>
</div>

<?php
	get_footer();
?>