<?php

session_start();
unset ($_SESSION['nomami1']);
unset ($_SESSION['nomami2']);
unset ($_SESSION['nomami3']);
unset ($_SESSION['nomami4']);
unset ($_SESSION['nomami5']);
unset ($_SESSION['nomami6']);
unset ($_SESSION['nomami7']);
unset ($_SESSION['nomami8']);
unset ($_SESSION['nomami9']);
unset ($_SESSION['nomami10']);

unset ($_SESSION['prenomami1']);
unset ($_SESSION['prenomami2']);
unset ($_SESSION['prenomami3']);
unset ($_SESSION['prenomami4']);
unset ($_SESSION['prenomami5']);
unset ($_SESSION['prenomami6']);
unset ($_SESSION['prenomami7']);
unset ($_SESSION['prenomami8']);
unset ($_SESSION['prenomami9']);
unset ($_SESSION['prenomami10']);

unset ($_SESSION['photopp1']);
unset ($_SESSION['photopp2']);
unset ($_SESSION['photopp3']);
unset ($_SESSION['photopp4']);
unset ($_SESSION['photopp5']);
unset ($_SESSION['photopp6']);
unset ($_SESSION['photopp7']);
unset ($_SESSION['photopp8']);
unset ($_SESSION['photopp9']);
unset ($_SESSION['photopp10']);
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

		if(!$marequete)
		{
			echo 'RIEN';
			exit;
		}

		else {


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
					echo 'truuuuuuc';
				}

			}
		}
		echo $incremente;
		for($i=$incremente-1;$i>-1;$i--)
		{
			if($i==$incremente-1)
			{
				$_SESSION['monami1']=$tableau[$incremente-1];
				$marequete4 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete4->execute(array($tableau[$incremente-1]));
				$donnees4=$marequete4->fetch();
				$_SESSION['prenomami1']=$donnees4['prenom'];
				$_SESSION['photopp1']=$donnees4['photodepp'];
				echo $donnees4['prenom'];

			}
			if($i==$incremente-2)
			{
				$_SESSION['monami2']=$tableau[$incremente-2];
				$marequete5 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete5->execute(array($tableau[$incremente-2]));
				$donnees5=$marequete5->fetch();
				$_SESSION['prenomami2']=$donnees5['prenom'];
				$_SESSION['photopp2']=$donnees5['photodepp'];

				echo $donnees5['prenom'];
			}
			if($i==$incremente-3)
			{
				$_SESSION['monami3']=$tableau[$incremente-3];
				$marequete6 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete6->execute(array($tableau[$incremente-3]));
				$donnees6=$marequete6->fetch();
				$_SESSION['prenomami3']=$donnees6['prenom'];
				$_SESSION['photopp3']=$donnees6['photodepp'];
			}
			if($i==$incremente-4)
			{
				$_SESSION['monami4']=$tableau[$incremente-4];
				$marequete7 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete7->execute(array($tableau[$incremente-4]));
				$donnees7=$marequete7->fetch();
				$_SESSION['prenomami4']=$donnees7['prenom'];
				$_SESSION['photopp4']=$donnees7['photodepp'];
			}
			if($i==$incremente-5)
			{
				$_SESSION['monami5']=$tableau[$incremente-5];
				$marequete8 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete8->execute(array($tableau[$incremente-5]));
				$donnees8=$marequete8->fetch();
				$_SESSION['prenomami5']=$donnees8['prenom'];
				$_SESSION['photopp5']=$donnees8['photodepp'];
			}
			if($i==$incremente-6)
			{
				$_SESSION['monami6']=$tableau[$incremente-6];
				$marequete9 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete9->execute(array($tableau[$incremente-6]));
				$donnees9=$marequete9->fetch();
				$_SESSION['prenomami6']=$donnees9['prenom'];
				$_SESSION['photopp6']=$donnees9['photodepp'];
			}
			if($i==$incremente-7)
			{
				$_SESSION['monami7']=$tableau[$incremente-7];
				$marequete10 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete10->execute(array($tableau[$incremente-7]));
				$donnees10=$marequete10->fetch();
				$_SESSION['prenomami7']=$donnees10['prenom'];
				$_SESSION['photopp7']=$donnees10['photodepp'];
			}
			if($i==$incremente-8)
			{
				$_SESSION['monami8']=$tableau[$incremente-8];
				$marequete11 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete11->execute(array($tableau[$incremente-8]));
				$donnees11=$marequete11->fetch();
				$_SESSION['prenomami8']=$donnees11['prenom'];
				$_SESSION['photopp8']=$donnees11['photodepp'];
			}
			if($i==$incremente-9)
			{
				$_SESSION['monami9']=$tableau[$incremente-9];
				$marequete12 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete12->execute(array($tableau[$incremente-9]));
				$donnees12=$marequete12->fetch();
				$_SESSION['prenomami9']=$donnees12['prenom'];
				$_SESSION['photopp9']=$donnees12['photodepp'];
			}
			if($i==$incremente-10)
			{
				$_SESSION['monami10']=$tableau[$incremente-10];
				$marequete13 = $bdd->prepare('SELECT prenom, photodepp FROM auteur WHERE nom= ?');
				$marequete13->execute(array($tableau[$incremente-10]));
				$donnees13=$marequete13->fetch();
				$_SESSION['prenomami10']=$donnees13['prenom'];
				$_SESSION['photopp10']=$donnees13['photodepp'];
			}
			
		}
		//echo $tableau[$incremente-2];
		echo $tableau[$incremente-1];
		
		$_SESSION['NbAmis']=$incremente;

        


		header('Location: AfficherCollegues.php');
	}
?>