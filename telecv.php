<?php

session_start();


 $targetfolder = "C:\Users\User";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $fichier = basename( $_FILES['file']['name']) ;


if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {


 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 try
     {


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