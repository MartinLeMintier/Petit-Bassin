<?php

session_start();

		
		$name = $_SESSION['nomrecherche'];
		$surename = $_SESSION['prenomrecherche'];
		
		$monID = $_SESSION['ID'];

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
		
		//on prend l'ID de la persone recherché
		$truc = $bdd->prepare('SELECT ID FROM auteur WHERE nom= ?');
		$truc->execute(array($name));
		$monfetch = $truc->fetch();
		$IDami=$monfetch['ID'];
		echo $IDami;
		
		//on cherche l'ID de ses amis
		$requete = $bdd->prepare('SELECT ID FROM reseaupro WHERE IDcollegue= ? AND ID= ?');
		$requete->execute(array($IDami,$monID));
		
		$lami = $requete->fetch();
		
		$requete2 = $bdd->prepare('SELECT IDami FROM reseaupro WHERE ID= ? AND IDcollegue=?');
		$requete2->execute(array($monID,$IDami));
		
		$lami2 = $requete2->fetch();
	
				if($lami2 OR $lami)
				{
					echo 'vous etes deja amis';
					header('Location: dejacollegue.php');	
					
				}
				else
				{	echo 'machin';
					echo $monID;	
					
					$monami = $bdd->prepare('INSERT INTO reseaupro(ID, IDcollegue) VALUES (:ID,:IDami)');
					$monami->execute(array(
						'ID' => $monID,
						'IDami' => $IDami,
						));	
					$monami = $bdd->prepare('INSERT INTO reseaupro(ID, IDcollegue) VALUES (:ID,:IDami)');
					$monami->execute(array(
						'ID' => $IDami,
						'IDami' => $monID,
						));
					header('Location: demandecollegue.php');	
				}

?>
