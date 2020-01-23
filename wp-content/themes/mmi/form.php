<?php

$adresse = 'Location: https://mmi.univ-smb.fr/~kademn/SiteMMI/www/post-form.php';

  //Si le submit bouton est appuyé
  if(isset($_POST['submitpost'])) {

    if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['desc']) && !empty($_POST['desc']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['projet'] && !empty($_POST['projet'] || isset($_POST['stage'] && !empty($_POST['stage'] ))))){

      $recipient = 'domusaruon@gmail.com'; //à changer pour le mail de l'université
            
      $sender = 'Expéditeur : '.$_POST['nom'].' '.$_POST['prenom'].' '.'From: '.$_POST['mail'];

      $desc = 'Description : '.$_POST['desc'];

      $retour = mail($recipient, 'Envoi' , $sender .' '. $message);
                    
      if ($retour) {

        echo '<h1>Votre message a bien été envoyé.</h1>';
        header($adresse);

      } else {

        echo '<h1>Erreur</h1>';

        }

    } else {

      if (empty($_POST['nom'])) {

        $missnom = 'nom manquant';
        header($adresse.'/?error='.$missnom);

      }

      if (empty($_POST['prenom'])) {

          $misstel = 'prenom manquant';
          header($adresse.'/?error='.$missprenom);

      }

      if (empty($_POST['mail'])) {

          $missmail = 'mail manquant';
          header($adresse.'/?error='.$missmail);

      }

      if (empty($_POST['desc'])) {

          $missmsg = 'msg manquant';
          header($adresse.'/?error='.$missmsg);

      }

      if (empty($_POST['stage']) && empty($_POST['projet'])) {

          $misscheck = 'stage ou projet manquant';
          header($adresse.'/?error='.$misscheck);

      }
    } 
  }

?>

