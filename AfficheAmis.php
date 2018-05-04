<?php

session_start();

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
		$incremente=0;
		$utili = $_SESSION['ID'];
		$marequete = $bdd->prepare('SELECT * FROM amis WHERE ID= ?');
		$marequete->execute(array($utili));

		$marequete2 = $bdd->prepare('SELECT IDami FROM amis WHERE ID= ?');
		$marequete2->execute(array($utili));
		$donnees2=$marequete2->fetch();

		while($donnees=$marequete->fetch())
		{
			if($donnees['ID']==$utili)
			{
				$incremente=$incremente+1;
				$ami=$donnees['IDami'];
				$marequete3 = $bdd->prepare('SELECT nom FROM auteur WHERE ID= ?');
				$marequete3->execute(array($ami));
				while($donnees3=$marequete3->fetch(PDO::FETCH_ASSOC))
				{
					$tableau[]=$donnees3['nom'];
					$truc=$donnees3['nom'];
				}

			}
		}
		echo $incremente;
		for($i=$incremente-1;$i>-1;$i--)
		{
			if($i==$incremente-1)
			{
				$_SESSION['monami1']=$tableau[$incremente-1];
			}
			if($i==$incremente-2)
			{
				$_SESSION['monami2']=$tableau[$incremente-2];
			}
			if($i==$incremente-3)
			{
				$_SESSION['monami3']=$tableau[$incremente-3];
			}
			if($i==$incremente-4)
			{
				$_SESSION['monami4']=$tableau[$incremente-4];
			}
			if($i==$incremente-5)
			{
				$_SESSION['monami5']=$tableau[$incremente-5];
			}
			if($i==$incremente-6)
			{
				$_SESSION['monami6']=$tableau[$incremente-6];
			}
			if($i==$incremente-7)
			{
				$_SESSION['monami7']=$tableau[$incremente-7];
			}
			if($i==$incremente-8)
			{
				$_SESSION['monami8']=$tableau[$incremente-8];
			}
			if($i==$incremente-9)
			{
				$_SESSION['monami9']=$tableau[$incremente-9];
			}
			if($i==$incremente-10)
			{
				$_SESSION['monami10']=$tableau[$incremente-10];
			}
			
		}
		echo $tableau[$incremente-2];
		echo $tableau[$incremente-1];
		
		$_SESSION['NbAmis']=$incremente;

		header('Location: reseau.php');
?>