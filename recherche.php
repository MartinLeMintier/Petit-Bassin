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
		$nom = $pieces[0];
		$nom2 = $pieces[1];
		$prenom = $pieces[1];
		$prenom2 = $pieces[0];
	
		
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

			$lenom = $bdd->prepare('SELECT nom, prenom FROM auteur WHERE nom=?');
			$lenom->execute(array($nom2));
			
			$lenom2 = $bdd->prepare('SELECT nom, prenom FROM auteur WHERE nom=?');
			$lenom2->execute(array($nom));
		
		    $donnees = $lenom->fetch();
			$donnees2 = $lenom2->fetch();
			
				if($donnees['nom']==$nom2)
				{
					$_SESSION['nomrecherche']=$donnees['nom'];
					if($prenom==$donnees['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
					if( $prenom2==$donnees['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
					if($prenom2==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
					if($prenom==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
						
				}
				if($donnees2['nom']==$nom)
				{
					$_SESSION['nomrecherche']=$donnees2['nom'];
					if($prenom==$donnees['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
					if( $prenom2==$donnees['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
					if($prenom2==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
					if($prenom==$donnees2['prenom'])
					{
						$_SESSION['prenomrecherche']=$donnees['nom'];
						header('Location: profilrecherche.php');
						echo 'ma bite';	
					}
						
				}
			
	}
		// On affiche chaque entrée une à une
		//$reponse->closeCursor(); // Termine le traitement de la requête
	}

//header('Location: problemeemail.php');
?> <p> adresse mail inexistante<p> <?php
?><a href="Connexion.php">retourner au menu principale</a><?php

?>