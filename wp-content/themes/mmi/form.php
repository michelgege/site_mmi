<?php

$adresse = 'Location: https://mmi.univ-smb.fr/~kademn/RopeUp/html/post-form.php';

  if(isset($_POST['submitpost'])) {

    // echo 'Captcha Valide';
    if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['desc']) && !empty($_POST['desc']) && isset($_POST['mail']) && !empty($_POST['mail'])))){

    $recipient = 'domusaruon@gmail.com'; //à changer pour le mail

    //limiter le nombre de caractères en 30 maximum par exemple
            
    $sender = 'Expéditeur : '.$_POST['nom'].' '.$_POST['prenom'];

    //ne mettre que des chiffres dans ce champ

    $desc = 'Description : '.$_POST['desc'];

    $header =  'From: '.$_POST['mail'];

    $retour = mail($recipient, 'Envoi' , $sender .' '. $message .' '.$header);
                    
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
    } 
  }

?>

