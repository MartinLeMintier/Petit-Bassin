<?php

if(isset($_GET['name']) AND isset($_GET['surename']) AND isset($_GET['email']) AND isset($_GET['username']) AND isset($_GET['confirm']))	
{
	if(empty($_GET['username']) OR empty($_GET['email']) OR empty($_GET['name']) OR empty($_GET['surename']) OR empty($_GET['confirm']))
	{
		?> <p> Erreur un champ est vide! <p> <?php
		?><a href="Connexion.php">retourner au menu principale</a><?php
		exit;
	}
	else
	{	
		$name = $_GET['name'];
		$surename = $_GET['surename'];
		$adresse_mail = $_GET['email'];
		$username = $_GET['username'];
		$confirm = $_GET['confirm'];
		
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
		
		$truc = $bdd->prepare('SELECT nom FROM auteur WHERE adresse_mail= ?');
		$truc->execute(array($adresse_mail));
		
		$test = $truc->fetch();
		
		if($test == FALSE)
		{
			if($username==$confirm)
			{
				$monom = $bdd->prepare('INSERT INTO auteur(adresse_mail, mdp, prenom, nom) VALUES (:adresse_mail,:mdp,:prenom,:nom)');
				$monom->execute(array(
					'adresse_mail' => $adresse_mail,
					'mdp' => $username,
					'prenom' => $surename,
					'nom' => $name,
					));	
				header('Location: success.php');	
			}
			else
			{
				header('Location: problemeMDPdiffAdmin.php');
				exit;
			}
		}
		else
		{
			header('Location: Admin.php');
		}
	}
}
?>
