<?php

session_start();

unset ($_SESSION['nomcollegue1']);
unset ($_SESSION['nomcollegue2']);
unset ($_SESSION['nomcollegue3']);
unset ($_SESSION['nomcollegue4']);
unset ($_SESSION['nomcollegue5']);
unset ($_SESSION['nomcollegue6']);
unset ($_SESSION['nomcollegue7']);
unset ($_SESSION['nomcollegue8']);
unset ($_SESSION['nomcollegue9']);
unset ($_SESSION['nomcollegue10']);

unset ($_SESSION['prenomcollegue1']);
unset ($_SESSION['prenomcollegue2']);
unset ($_SESSION['prenomcollegue3']);
unset ($_SESSION['prenomcollegue4']);
unset ($_SESSION['prenomcollegue5']);
unset ($_SESSION['prenomcollegue6']);
unset ($_SESSION['prenomcollegue7']);
unset ($_SESSION['prenomcollegue8']);
unset ($_SESSION['prenomcollegue9']);
unset ($_SESSION['prenomcollegue10']);

unset ($_SESSION['photoCpp1']);
unset ($_SESSION['photoCpp2']);
unset ($_SESSION['photoCpp3']);
unset ($_SESSION['photoCpp4']);
unset ($_SESSION['photoCpp5']);
unset ($_SESSION['photoCpp6']);
unset ($_SESSION['photoCpp7']);
unset ($_SESSION['photoCpp8']);
unset ($_SESSION['photoCpp9']);
unset ($_SESSION['photoCpp10']);

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
		$marequete = $bdd->prepare('SELECT * FROM reseaupro WHERE ID= ?');
		$marequete->execute(array($utili));
		echo $utili;

		if(!$marequete)
		{
			echo 'RIEN';
			exit;
		}
         else {
		$marequete2 = $bdd->prepare('SELECT IDcollegue FROM reseaupro WHERE ID= ?');
		$marequete2->execute(array($utili));
		$donnees2=$marequete2->fetch();

		while($donnees=$marequete->fetch())
		{ echo 'bisou';
			if($donnees['ID']==$utili)
			{ echo 'bisou';
				$incremente=$incremente+1;
				$ami=$donnees['IDcollegue'];
				$marequete3 = $bdd->prepare('SELECT nom FROM auteur WHERE ID= ?');
				$marequete3->execute(array($ami));
				while($donnees3=$marequete3->fetch(PDO::FETCH_ASSOC))
				{
					$tableau[]=$donnees3['nom'];
					$truc=$donnees3['nom'];
					echo 'bisou';
				}

			}
		}
		//echo $incremente;
		for($i=$incremente-1;$i>-1;$i--)
		{
			if($i==$incremente-1)
			{
				$_SESSION['moncollegue1']=$tableau[$incremente-1];
				$marequete4 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete4->execute(array($tableau[$incremente-1]));
				$donnees4=$marequete4->fetch();
				$_SESSION['prenomcollegue1']=$donnees4['prenom'];
				$_SESSION['photoCpp1']=$donnees4['photodepp'];
				echo $donnees4['prenom'];
				echo $donnees4[$incremente-1];

			}
			if($i==$incremente-2)
			{
				$_SESSION['moncollegue2']=$tableau[$incremente-2];
				$marequete5 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete5->execute(array($tableau[$incremente-2]));
				$donnees5=$marequete5->fetch();
				$_SESSION['prenomcollegue2']=$donnees5['prenom'];
				$_SESSION['photoCpp2']=$donnees5['photodepp'];

				echo $donnees5['prenom'];
			}
			if($i==$incremente-3)
			{
				$_SESSION['moncollegue3']=$tableau[$incremente-3];
				$marequete6 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete6->execute(array($tableau[$incremente-3]));
				$donnees6=$marequete6->fetch();
				$_SESSION['prenomcollegue3']=$donnees6['prenom'];
				$_SESSION['photoCpp3']=$donnees6['photodepp'];
			}
			if($i==$incremente-4)
			{
				$_SESSION['moncollegue4']=$tableau[$incremente-4];
				$marequete7 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete7->execute(array($tableau[$incremente-4]));
				$donnees7=$marequete7->fetch();
				$_SESSION['prenomcollegue4']=$donnees7['prenom'];
				$_SESSION['photoCpp4']=$donnees7['photodepp'];
			}
			if($i==$incremente-5)
			{
				$_SESSION['moncollegue5']=$tableau[$incremente-5];
				$marequete8 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete8->execute(array($tableau[$incremente-5]));
				$donnees8=$marequete8->fetch();
				$_SESSION['prenomcollegue5']=$donnees8['prenom'];
				$_SESSION['photoCpp5']=$donnees8['photodepp'];
			}
			if($i==$incremente-6)
			{
				$_SESSION['moncollegue6']=$tableau[$incremente-6];
				$marequete9 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete9->execute(array($tableau[$incremente-6]));
				$donnees9=$marequete9->fetch();
				$_SESSION['prenomcollegue6']=$donnees9['prenom'];
				$_SESSION['photoCpp6']=$donnees9['photodepp'];
			}
			if($i==$incremente-7)
			{
				$_SESSION['moncollegue7']=$tableau[$incremente-7];
				$marequete10 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete10->execute(array($tableau[$incremente-7]));
				$donnees10=$marequete10->fetch();
				$_SESSION['prenomcollegue7']=$donnees10['prenom'];
				$_SESSION['photoCpp7']=$donnees10['photodepp'];
			}
			if($i==$incremente-8)
			{
				$_SESSION['moncollegue8']=$tableau[$incremente-8];
				$marequete11 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete11->execute(array($tableau[$incremente-8]));
				$donnees11=$marequete11->fetch();
				$_SESSION['prenomcollegue8']=$donnees11['prenom'];
				$_SESSION['photoCpp8']=$donnees11['photodepp'];
			}
			if($i==$incremente-9)
			{
				$_SESSION['moncollegue9']=$tableau[$incremente-9];
				$marequete12 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete12->execute(array($tableau[$incremente-9]));
				$donnees12=$marequete12->fetch();
				$_SESSION['prenomcollegue9']=$donnees12['prenom'];
				$_SESSION['photoCpp9']=$donnees12['photodepp'];
			}
			if($i==$incremente-10)
			{
				$_SESSION['moncollegue10']=$tableau[$incremente-10];
				$marequete13 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete13->execute(array($tableau[$incremente-10]));
				$donnees13=$marequete13->fetch();
				$_SESSION['prenomcollegue10']=$donnees13['prenom'];
				$_SESSION['photoCpp10']=$donnees13['photodepp'];
			}
			
		}
		//echo $tableau[$incremente-2];
		echo $tableau[$incremente-1];
		
		$_SESSION['NbColleges']=$incremente;

        






		header('Location: reseau.php');
	}
?>