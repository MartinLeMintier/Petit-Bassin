<?php

session_start();
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                    
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'images/' . basename($_FILES['monfichier']['name']));
                        try
     {

          $fichier =basename($_FILES['monfichier']['name']);
          $bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');
          $truc = $bdd->prepare('UPDATE auteur SET photodepp = ? WHERE nom = ?');
          $truc->execute(array($fichier, $_SESSION['nomrecherche']));

          

          $_SESSION['photorecherche']=$fichier;



     }
               catch(Exception $e)
          {
               // En cas d'erreur, on affiche un message et on arrête tout
               die('Erreur : '.$e->getMessage());
          }

                        echo "L'envoi a bien été effectué !";
                }
        }
}
?>

 