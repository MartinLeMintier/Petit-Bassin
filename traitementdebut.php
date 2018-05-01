<?php

if(isset($_GET['username']) AND isset($_GET['email']) AND isset($_GET['choix']))
{
	if(empty($_GET['username']) OR empty($_GET['email']) OR empty($_GET['choix']))
	{
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
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$monom = $bdd->prepare('SELECT * FROM administrateur');
			$monom->execute(array($adresse_mail, $username));
			
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}

		if($choix=='Admin')
		{
				
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
						?> <p> mdp incorrecte <p> <?php
						?><a href="Connexion.php">retourner au menu principale</a><?php
						exit;
					}
				}
			}
		}
		else
		{
			?> <p> Pas acces <p> <?php
		}
		
		// On affiche chaque entrée une à une
		//$reponse->closeCursor(); // Termine le traitement de la requête
	}
}

?> <p> adresse mail inexistante chez les administrateurs <p> <?php
?><a href="Connexion.php">retourner au menu principale</a><?php

?>