<?php
/**
 * Template Name: Post-form
 */
?>

<?php get_header(); ?>

<?php

	$errorpop = false;

  	//Si le submit bouton est appuyé
	if (isset($_POST['submitpost'])) {

    if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['desc']) && !empty($_POST['desc']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['stageprojet']) && !empty($_POST['stageprojet'])){

    	if (!empty($_POST['stage'])) {
        	$recipient = ''; //mail du stage
    	} else if (!empty($_POST['projet'])) {
        	$recipient = ''; //mail du projet
      	}

      	$recipient = 'domusaruon@gmail.com'; //à supprimer

      	$sender = 'Expéditeur : '.$_POST['nom'].' '.$_POST['prenom'].' '.'From: '.$_POST['mail'];

      	$desc = 'Description : '.$_POST['desc'];

      	$retour = mail($recipient, 'Envoi' , $sender .' '. $desc);
                    
      	if ($retour) {

        echo '<h1>Votre message a bien été envoyé.</h1>';
        $errorpop = false;

    } else {

        	echo '<h1>Erreur</h1>';

    	}

    } else {

		    if (empty($_POST['nom'])) {

		    	$error = 'le nom est manquant';
		    	$errorpop = true;
		        
		    }

		    if (empty($_POST['prenom'])) {

		      	$error = 'le prenom est manquant';
		     	$errorpop = true;
		    }

		    if (empty($_POST['mail'])) {

		        $error = 'le mail est manquant';
		        $errorpop = true;
		    }

		    if (empty($_POST['desc'])) {

		        $error = 'le message est manquant';
		        $errorpop = true;
		    }

		    if (empty($_POST['stageprojet'])) {

		        $error = 'le choix "stage" ou "projet" est manquant';
		        $errorpop = true;
      		}
    	} 
  	}


	if ($errorpop) {

		echo '<div class="pop-up">

			<h1 id="title_pop"> Erreur </h1>
			<p id="content"> Il manque des informations ! Ici, <?php echo $error ?> </p>
			<img src="'.get_template_directory_uri().'/img/coin_pro/plane.svg" data-depth="" id="plane" alt="plane">
		    <div id="flex">
		    	<p id="form"> Votre formulaire n\'a pas été envoyé, veuillez patienter </p> <h3 id="counter">10</h3> <p id="sec"> secondes </p>
		    </div>

		    <h3 id="boutonform"> Ou appuyez sur ce bouton ! </h3>
		    <a href="coin-pro#wrap_form" id="rea"> <input type="button" class="button" href="coin-pro#wrap_form" value="Retour"> </a>

			</div>';
	} else {

		echo '<div class="pop-up">
			<h1 id="title_pop"> Merci pour ces renseignements ! </h1>
			<p id="content"> Le formulaire vous sera envoyé d\'ici quelques jours. En attendant, n\'hésitez pas à consulter notre site ou à vous rendre sur les réseaux sociaux. </p>
			<img src="'. get_template_directory_uri() .'/img/coin_pro/plane.svg" data-depth="" id="plane" alt="plane">
		    <div id="flex">
		    	<p id="form"> Votre formulaire a bien été envoyé, veuillez attendre</p> <h3 id="counter">10</h3> <p id="sec"> secondes </p>
		    </div>

		    <h3 id="boutonform"> Ou appuyez sur ce bouton ! </h3>
		    <a href="coin-pro#wrap_form" id="rea"> <input type="button" class="button" href="coin-pro#wrap_form" value="Retour"> </a>

			</div>';
	}

	get_footer();

?>
