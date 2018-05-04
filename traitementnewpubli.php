<?php

session_start();

if(isset($_GET['text']) AND isset($_GET['lieu']))	
{
	if(empty($_GET['text']) OR empty($_GET['lieu']))
	{
		header('Location: profil.php');
		?> <p> Erreur un champ est vide! <p> <?php
		?><a href="Connexion.php">retourner au menu principale</a><?php
		exit;
	}
	else
	{		
		$text = $_GET['text'];
		$lieu = $_GET['lieu'];
		$today = date("Y-m-d"); 





	

	try {

		$bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');

							    
				$max =$bdd->prepare('SELECT MAX(IDPub) FROM `publication`');
				$max->execute(array());
				$bidule = $max->fetch();

				//echo $bidule['MAX(IDemploi)'];
				$maxim = $bidule['MAX(IDPub)'];

				$bidule['MAX(IDPub)']= $bidule['MAX(IDPub)']+1;

				//echo $bidule['MAX(IDemploi)'];
				$maxim2 = $maxim + 1;

				echo $maxim2;
				echo $text;
				echo $lieu;
				echo $today;
				echo $_SESSION["ID"];
				

				

				$newemplois = $bdd->prepare('INSERT INTO publication (`IDPub`, `Texte`, `Lieu`,`Date`,`NbLikes`) VALUES (:IDPub, :Texte, :Lieu, :Date, :NbLikes);');

				$newemplois->execute(array('IDPub'=> $maxim2, 'Texte'=>  $text, 'Lieu'=>$lieu, 'Date'=>$today, 'NbLikes'=>0));

				$newemplois2 = $bdd->prepare('INSERT INTO publie (`IDutilisateur`, `IDpub`) VALUES (:IDutilisateur, :IDpub);');
				$newemplois2->execute(array('IDutilisateur'=> $_SESSION["ID"], 'IDpub'=>  $maxim2));

				//header('Location: profil.php');
		
	} catch (Exception $e) {
		// En cas d'erreur, on affiche un message et on arrête tout

							die('Erreur : '.$e->getMessage());
	}
}
}
?>