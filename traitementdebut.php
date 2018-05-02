<?php

if(isset($_GET['username']) AND isset($_GET['email']) AND isset($_GET['choix']))	
{
	if(empty($_GET['username']) OR empty($_GET['email']) OR empty($_GET['choix']))
	{
		header('Location: Connexion.php');
		?> <p> Erreur un champ est vide! <p> <?php
		?><a href="Connexion.php">retourner au menu principale</a><?php
		exit;
	}
	else
	{		
		$username = $_GET['username'];
		$adresse_mail = $_GET['email'];
		$choix = $_GET['choix'];
		
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

		if($choix=='Admin')
		{
			$monom = $bdd->prepare('SELECT * FROM administrateur');
			$monom->execute(array($adresse_mail, $username));
				
			while ($donnees = $monom->fetch())
			{
				
				if($donnees['Adresse_mail']==$adresse_mail)
				{
					if($donnees['mdp']==$username)
					{			
						header('Location: Admin.php');		
						?>
							<p>
							<strong>Admin</strong> : <?php echo $donnees['nom']; ?><br />
							l'amin est : <?php echo $donnees['prenom']; ?>, et son adresse mail est <?php echo $donnees['Adresse_mail']; ?> !<br />
						   </p>

						<?php
						
						exit;
					}
					else
					{
						header('Location: problememdp.php');
						?> <p> mdp incorrecte <p> <?php
						?><a href="Connexion.php">retourner au menu principale</a><?php
						exit;
					}
				}
			}
		}
		else if($choix=='Utilisateur')
		{
			$monom2 = $bdd->prepare('SELECT * FROM auteur');
			$monom2->execute(array($adresse_mail, $username));
			
			while ($donnees1 = $monom2->fetch())
			{
				
				if($donnees1['adresse_mail']==$adresse_mail)
				{
					if($donnees1['mdp']==$username)	
					{			
						header('Location: AccueilUtilisateur.php');		
						?>
							<p>
							<strong>utilisateur</strong> : <?php echo $donnees1['nom']; ?><br />
							l'utilisateur est : <?php echo $donnees1['prenom']; ?>, et son adresse mail est <?php echo $donnees1['adresse_mail']; ?> !<br />
						   </p>

						<?php
						
						exit;
					}
					else
					{
						header('Location: problememdp.php');
						?> <p> mdp incorrecte <p> <?php
						?><a href="Connexion.php">retourner au menu principale</a><?php
						exit;
					}
				}
			}
		}
		
		// On affiche chaque entrée une à une
		//$reponse->closeCursor(); // Termine le traitement de la requête
	}
}
header('Location: problemeemail.php');
?> <p> adresse mail inexistante<p> <?php
?><a href="Connexion.php">retourner au menu principale</a><?php

?>