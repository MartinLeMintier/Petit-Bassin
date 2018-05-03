<?php

if(isset($_GET['email']))	
{
	if(empty($_GET['email']))
	{
		header('Location: Connexion.php');
		?> <p> Erreur un champ est vide! <p> <?php
		?><a href="Connexion.php">retourner au menu principale</a><?php
		exit;
	}
	else
	{		
		$adresse_mail = $_GET['email'];
		
		try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');
			//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//$monom = $bdd->prepare('SELECT * FROM administrateur');
			//$monom->execute(array($adresse_mail, $username));
			
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}

			$monom = $bdd->prepare('SELECT * FROM auteur');
			$monom->execute(array($adresse_mail));
				
			while ($donnees = $monom->fetch())
			{
				if($donnees['adresse_mail']==$adresse_mail)
				{ 
					$monom = $bdd->prepare('DELETE FROM auteur WHERE adresse_mail= ?');
					$monom->execute(array($adresse_mail));	
					header('Location: supprsuccess.php');					
					exit;
				}
			}	
		// On affiche chaque entrée une à une
		//$reponse->closeCursor(); // Termine le traitement de la requête
	}
}
header('Location: problememdpsuoo.php');
?> <p> adresse mail inexistante<p> <?php
?><a href="Connexion.php">retourner au menu principale</a><?php

?>