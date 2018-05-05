<?php


session_start();

if(isset($_GET['search']))	
{
	if(empty($_GET['search']))
	{
		header('Location: Connexion.php');
		?> <p> Erreur un champ est vide! <p> <?php
		?><a href="Connexion.php">retourner au menu principale</a><?php
		exit;
	}
	else
	{		
		$name = $_GET['search'];
		$pieces = explode(" ", $name);
		
		if(count($pieces)==2)
		{
			$nom = $pieces[0];
			$nom2 = $pieces[1];
			$prenom = $pieces[1];
			$prenom2 = $pieces[0];
		}
		else
		{
			echo 'probleme';
			header('Location: problemerecherche.php');
			exit;
		}
		
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

			$lenom = $bdd->prepare('SELECT nom, prenom, photodepp, photodecouv FROM auteur WHERE nom=?');
			$lenom->execute(array($nom2));
			
			$lenom2 = $bdd->prepare('SELECT nom, prenom, photodepp, photodecouv FROM auteur WHERE nom=?');
			$lenom2->execute(array($nom));
		
		    $donnees = $lenom->fetch();
			$donnees2 = $lenom2->fetch();
			if($donnees OR $donnees2)
			{
				
				if($donnees['nom']==$nom2)
				{
					$_SESSION['nomrecherche']=$donnees['nom'];
					if($prenom==$donnees['prenom'])
					{
						echo 'truuuuuuuuuuuc';
						$_SESSION['prenomrecherche']=$donnees['prenom'];
						$_SESSION['photorecherche']=$donnees['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees['photodecouv'];
						header('Location: profilrecherche.php');
						
					}
					if( $prenom2==$donnees['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['prenom'];
						$_SESSION['photorecherche']=$donnees['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees['photodecouv'];
						header('Location: profilrecherche.php');
						
					}
					if($prenom2==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['prenom'];
						$_SESSION['photorecherche']=$donnees['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees['photodecouv'];
						header('Location: profilrecherche.php');
						
					}
					if($prenom==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['prenom'];
						$_SESSION['photorecherche']=$donnees['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees['photodecouv'];
						header('Location: profilrecherche.php');
						
					}
						
				}
				else if($donnees2['nom']==$nom)
				{
					echo 'nom2';
					$_SESSION['nomrecherche']=$donnees2['nom'];
					if($prenom==$donnees['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees2['prenom'];
						$_SESSION['photorecherche']=$donnees2['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees2['photodecouv'];
						header('Location: profilrecherche.php');
							
					}
					if( $prenom2==$donnees['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees2['prenom'];
						$_SESSION['photorecherche']=$donnees2['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees2['photodecouv'];
						header('Location: profilrecherche.php');
						
					}
					if($prenom2==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees2['prenom'];
						$_SESSION['photorecherche']=$donnees2['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees2['photodecouv'];
						header('Location: profilrecherche.php');
						
					}
					if($prenom==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees2['prenom'];
						$_SESSION['photorecherche']=$donnees2['photodepp'];
						$_SESSION['photodecouvrecherche']=$donnees2['photodecouv'];
						header('Location: profilrecherche.php');
						
					}
						
				}
			}
			else
				header('Location: problemerecherche.php');
			
	}
		// On affiche chaque entrée une à une
		//$reponse->closeCursor(); // Termine le traitement de la requête
		
}



?>