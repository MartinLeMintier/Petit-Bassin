<?php

session_start();


$dossier = 'images/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...

     //$fichier ='pp.jpg';



$fichier = strtr($fichier, 
        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);


     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload ok !';

               try
     {
          $bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');
          $truc = $bdd->prepare('UPDATE auteur SET photodecouv = ? WHERE nom = ?');
          $truc->execute(array($fichier, $_SESSION['nomrecherche']));


          $_SESSION['photodecouvrecherche']=$fichier;



     }
               catch(Exception $e)
          {
               // En cas d'erreur, on affiche un message et on arrête tout
               die('Erreur : '.$e->getMessage());
          }


          header('Location: profilrechercheAdmin.php');
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
?>