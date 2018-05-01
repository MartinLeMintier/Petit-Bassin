<?php

if(isset($_GET['username']) AND isset($_GET['email']) AND isset($_GET['choix']))
{
	if(empty($_GET['username']) OR empty($_GET['email']) OR empty($_GET['choix']))
	{
		echo 'Erreur un champ est vide!';
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
			$monom->execute(array($username, $adresse_mail));
			
		}
		catch(Exception $e)
		{
			
			// En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
		}
		
		if($monom)
		{

			if($choix=='Admin')
			{
						
				while ($donnees = $monom->fetch())
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
						
					}
						
				}
				
			}
			else
			{
			?> <p> Pas acces <p> <?php
			}
		}
		if(!$monom)
			echo 'Pas dans la base de donnee';
		// On affiche chaque entrée une à une
		//$reponse->closeCursor(); // Termine le traitement de la requête
		
	}
}

$monom->closeCursor();
?>