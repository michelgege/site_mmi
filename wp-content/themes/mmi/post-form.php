	<?php
/**
 * Template Name: Post-form
 */
?>

<?php
get_header();
?>

	<div class="pop-up">
		<h1 id="title_pop"> Merci pour ces renseignements ! </h1>
		<p id="content"> Le formulaire te sera envoyé d'ici quelques jours. En attendant, n'hésite pas à consulter notre site ou à te rendre sur les réseaux sociaux. </p>
		<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/plane.svg" data-depth="" id="plane" alt="plane">
        <div id="flex">
        	<p id="form"> Votre formulaire a bien été envoyé, veuillez attendre</p> <h3 id="counter">10</h3> <p id="sec"> secondes </p>
        </div>


        <h3 id="boutonform"> Ou appuyez sur ce bouton ! </h3>
        <a href="coin-pro#wrap_form" id="rea"> <input type="button" class="button" href="coin-pro#wrap_form" value="Retour"> </a>

	</div>




<?php
get_footer();
?>