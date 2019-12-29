<?php

$adresse = 'Location: https://mmi.univ-smb.fr/~kademn/RopeUp/html/post-form.php';

//Appelle le fichier exécutant le captcha
  require('recaptcha/autoload.php');

  //Si le submit bouton est appuyé, vérifier si le coche du captcha existe
  if(isset($_POST['submitpost'])) {
    if(isset($_POST['g-recaptcha-response'])) {

    //le captcha est défini par sa clé
      $recaptcha = new \ReCaptcha\ReCaptcha('6LdCL8MUAAAAAHH-ZwQNzjTvb9GG_Q4gvOj-O3Cn');
      //le captcha vérifie que la réponse est correcte
      $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
      //Si la réponse est un succés, le captcha est valide, sinon, il doit montrer les erreurs occasionnées
      if ($resp->isSuccess()) {
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
                }
                else
                {
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

      } else {
          // $errors = $resp->getErrorCodes();
          $invalid = 'Captcha Invalide';
          header($adresse.'/?error='.$invalid);
      }
    } else { //Si le captcha n'est pas rempli, c'est indiqué ici
      $misscaptcha = 'Captcha non rempli';
      header($adresse.'/?error='.$misscaptcha);
    }
  }

?>

