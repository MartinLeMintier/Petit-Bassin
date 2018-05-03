<?php

session_start();


 $targetfolder = "CV/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $fichier = basename( $_FILES['file']['name']) ;


if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {


 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 try
     {

          $bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');
          $truc = $bdd->prepare('UPDATE auteur SET cv = ? WHERE adresse_mail = ?');
          $truc->execute(array($fichier, $_SESSION['email']));






     }
               catch(Exception $e)
          {
               // En cas d'erreur, on affiche un message et on arrête tout
               die('Erreur : '.$e->getMessage());
          }



          header('Location: profil.php');

 }

 else {

 echo "Problem uploading file";

 }

 ?>