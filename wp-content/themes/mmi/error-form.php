<?php
/**
 * Template Name: Post-form
 */
?>

<?php $error = $_GET['error']; ?>

<div class="pop-up">

	<h1 id="title_pop"> Erreur </h1>
	<p id="content"> Il manque des informations ! Ici, <?php echo $error ?> </p>
	<img src="<?php echo get_template_directory_uri() ?>/img/coin_pro/plane.svg" data-depth="" id="plane" alt="plane">
    <div id="flex">
    	<p id="form"> Votre formulaire n'a pas été envoyé, veuillez patienter </p> <h3 id="counter">10</h3> <p id="sec"> secondes </p>
    </div>

    <h3 id="boutonform"> Ou appuyez sur ce bouton ! </h3>
    <a href="coin-pro#wrap_form" id="rea"> <input type="button" class="button" href="coin-pro#wrap_form" value="Retour"> </a>

</div>