<?php


if(isset($_GET['name']) AND isset($_GET['tel']))	
{
	if(empty($_GET['name']) OR empty($_GET['tel']))
	{
		header('Location: emplois.php');
		?> <p> Erreur un champ est vide! <p> <?php
		?><a href="Connexion.php">retourner au menu principale</a><?php
		exit;
	}
	else
	{		
		$name = $_GET['name'];
		$tel = $_GET['tel'];

	

	try {

		$bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');

							    
				$max =$bdd->prepare('SELECT MAX(IDemploi) FROM `emplois`');
				$max->execute(array());
				$bidule = $max->fetch();

				//echo $bidule['MAX(IDemploi)'];
				$maxim = $bidule['MAX(IDemploi)'];

				$bidule['MAX(IDemploi)']= $bidule['MAX(IDemploi)']+1;

				//echo $bidule['MAX(IDemploi)'];
				$maxim2 = $maxim + 1;
				

				$newemplois = $bdd->prepare('INSERT INTO emplois (IDemploi, Titre, Tel) VALUES (:IDemploi, :Titre, :Tel);');
				$newemplois->execute(array('IDemploi'=> $maxim2, 'Titre'=>$name, 'Tel'=>$tel));

				header('Location: emplois.php');
		
	} catch (Exception $e) {
		
	}
}
}
?>