<?php

$adresse = 'Location: http://localhost/site_mmi/';

  //Si le submit bouton est appuyé
  if (isset($_POST['submitpost'])) {

    if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['desc']) && !empty($_POST['desc']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['projet']) && !empty($_POST['projet'])){

      if (!empty($_POST['stage'])) {
        $recipient = '' //mail du stage
      } else if (!empty($_POST['projet'])) {
        $recipient = '' //mail du projet
      }

      $recipient = 'domusaruon@gmail.com'; //à supprimer

      $sender = 'Expéditeur : '.$_POST['nom'].' '.$_POST['prenom'].' '.'From: '.$_POST['mail'];

      $desc = 'Description : '.$_POST['desc'];

      $retour = mail($recipient, 'Envoi' , $sender .' '. $message);
                    
      if ($retour) {

        echo '<h1>Votre message a bien été envoyé.</h1>';
        header($adresse.'post-form');

      } else {

        echo '<h1>Erreur</h1>';

        }

    } else {

      if (empty($_POST['nom'])) {

        $missnom = 'le nom est manquant';
        header($adresse.'error-form/?error='.$missnom);

      }

      if (empty($_POST['prenom'])) {

          $misstel = 'le prenom est manquant';
          header($adresse.'error-form/?error='.$missprenom);

      }

      if (empty($_POST['mail'])) {

          $missmail = 'le mail est manquant';
          header($adresse.'error-form/?error='.$missmail);

      }

      if (empty($_POST['desc'])) {

          $missmsg = 'le message est manquant';
          header($adresse.'error-form/?error='.$missmsg);

      }

      if (empty($_POST['stage']) && empty($_POST['projet'])) {

          $misscheck = 'le choix "stage" ou "projet" est manquant';
          header($adresse.'error-form/?error='.$misscheck);

      }
    } 
  }

?>

