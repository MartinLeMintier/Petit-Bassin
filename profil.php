<?php

session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Page Profil</title>
</head>

	<!-- Tout des details de la bare bleu en haut de la page -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="ProfilDesign.css?refresh=0" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="images/logonew.png">


</script>


<body class ="boudy">


	<!-- Navbar -->
	<nav role="navigation" class="navbar navbar-reverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="images/logonew.png" class="logo" alt="" />
				<a class="navbar-brand" href="AccueilUtilisateur.php">PloufBook</a>
			</div>

			<!-- Icone pour la deconnexion -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="deconnexion.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>

				</ul>
			<!-- Icone pour la Notification -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>

				</ul>
			<!-- Icone pour la messagerie -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="	glyphicon glyphicon-envelope"></span> Messagerie</a></li>

				</ul>

				<!-- Icone pour les emplois -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="emplois.php"><span class="	glyphicon glyphicon-piggy-bank"></span> Emlpois</a></li>

				</ul>


			<!-- Icone pour la Mon reseau -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="AfficheAmis.php"><span class="glyphicon glyphicon-link"></span> Mon Réseau</a></li>

				</ul>

				<!-- Icone pour la Mon Profil -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profil.php"><span class="glyphicon glyphicon-user"></span> Vous</a></li>

				</ul>
			<!-- Icone pour la acceuil -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="AccueilUtilisateur.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>

				</ul>



			</div>

			
				
			

		</div>
	</nav>

	<header>
		<div id="titre_page">

			<!-- On affcihe l'image du profil dans la base de données -->
		<?php 
		echo '<img class="pc" src="images/' . $_SESSION['PC'] . '">'; 
		?>
		
		</div>

	</header>


	<div>
		
		<!-- On affcihe l'image du profil dans la base de données -->
		<?php $t = $_SESSION['PP']; 

		echo '<img class="pp" src="images/' . $t . '">'; 

		?>


		

	</div>

	


    <div class="placer-nom">
	<!-- On affiche le nom de l'utilisateur -->
	<h1 class="test"><?php echo $_SESSION['prenom']; echo " "; echo $_SESSION['nom']; ?></h1> 
	</div>
	<div class="bouton">
		<a href="upload.html"><button type ='submit'  class ="btn btn-primary bouton"  >Changer photo</button></a>
		<a href="upload_cv.html"><button type ='submit'  class ="btn btn-primary bouton"  >Charger CV</button></a>
		
		<a href="upload_pc.html"><button type ='submit'  class ="btn btn-primary bouton"  >Changer Photo de fond</button></a>

		<a href="newpubli.php"><button type ='submit'  class ="btn btn-primary bouton"  >Poster !</button></a>
	</div>


<!-- On en a pas besoin de ca 
	<p> <?php echo $_SESSION['mdp']; ?> </p>
	<p> <?php echo $_SESSION['ID']; ?> </p>
	<p> <?php echo $_SESSION['email']; ?> </p>
	<p> <?php echo $_SESSION['PP']; ?> </p>   -->


<div class ="profilcenter">
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3">
      
      </div>
      
      
    


          		<?php  


          				try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');

							//$publications = $bdd->prepare('SELECT IDpub FROM publie WHERE IDutilisateur = ?');
							$publications = $bdd->prepare('SELECT Texte FROM publication WHERE publication.IDPub IN (SELECT IDpub FROM publie WHERE IDutilisateur = ?) ORDER BY `IDpub` DESC');
							$publications->execute(array($_SESSION['ID']));

							$publicationsD = $bdd->prepare('SELECT Date FROM publication WHERE publication.IDPub IN (SELECT IDpub FROM publie WHERE IDutilisateur = ?)ORDER BY `IDpub` DESC');
							$publicationsD->execute(array($_SESSION['ID']));

							$publicationsH = $bdd->prepare('SELECT humeur FROM publication WHERE publication.IDPub IN (SELECT IDpub FROM publie WHERE IDutilisateur = ?)ORDER BY `IDpub` DESC');
							$publicationsH->execute(array($_SESSION['ID']));	

							$publicationsL = $bdd->prepare('SELECT Lieu FROM publication WHERE publication.IDPub IN (SELECT IDpub FROM publie WHERE IDutilisateur = ?)ORDER BY `IDpub` DESC');
							$publicationsL->execute(array($_SESSION['ID']));


							?>

							</div>
						    <div class="col-sm-7 ">
						    

						      
						      <div class="row">
						        <div class="col-sm-3">
						          <div class="well">
						           <p><?php echo $_SESSION['prenom'];?><br />
						           	<?php echo $_SESSION['nom'];?><br />

						           	<?php
						           	$lireD = $publicationsD->fetch();
						           	?>

						           	<?php echo 'Le '. $lireD[0];?><br />

						           	

						           	<?php
						           	$lireL = $publicationsL->fetch();
						           	?>
						           	
						           	<?php echo 'Lieu : '. $lireL[0];?><br />

						           	<?php
						           	$lireH = $publicationsH->fetch();
						           	?>
						           	
						           	<?php echo 'Humeur : '.$lireH[0];?><br />


						           </p>
						           
						          </div>
						        </div>
						        <div class="col-sm-9">
						         <div class="well">

						         	<?php


							$lire = $publications->fetch();

										
							echo $lire[0];

							

								?>
					            <div class="panel-body">
					          </div>

					          </div>
					        </div>
					      </div>

					      <?php

						?>

						<div class="row">		
				        <div class="col-sm-3">
				          <div class="well">
				           <p><?php echo $_SESSION['prenom'];?><br />
				           	<?php echo $_SESSION['nom'];?><br />

				           		<?php
						           	$lireD = $publicationsD->fetch();
						           	?>

						           	<?php echo 'Le '. $lireD[0];?><br />

						           	

						           	<?php
						           	$lireL = $publicationsL->fetch();
						           	?>
						           	
						           	<?php echo 'Lieu : '. $lireL[0];?><br />

						           	<?php
						           	$lireH = $publicationsH->fetch();
						           	?>
						           	
						           	<?php echo 'Humeur : '.$lireH[0];?><br />
				           </p>
				 
				          </div>
				        </div>
				        <div class="col-sm-9">
				          <div class="well">


						         	<?php


							/*while(*/$lire = $publications->fetch();//)
							//{
								echo $lire[0];

							//}

								?>
				          </div>
				        </div>
				      </div>

				      <div class="row">		
				        <div class="col-sm-3">
				          <div class="well">
				           <p><?php echo $_SESSION['prenom'];?><br />
				           	<?php echo $_SESSION['nom'];?><br />

				           		<?php
						           	$lireD = $publicationsD->fetch();
						           	?>

						           	<?php echo 'Le '. $lireD[0];?><br />

						           	

						           	<?php
						           	$lireL = $publicationsL->fetch();
						           	?>
						           	
						           	<?php echo 'Lieu : '. $lireL[0];?><br />

						           	<?php
						           	$lireH = $publicationsH->fetch();
						           	?>
						           	
						           	<?php echo 'Humeur : '.$lireH[0];?><br />
				           </p>
				 
				          </div>
				        </div>
				        <div class="col-sm-9">
				          <div class="well">


						         	<?php


							/*while(*/$lire = $publications->fetch();//)
							//{
								echo $lire[0];

							//}

								?>
				          </div>
				        </div>
				      </div>

				      <div class="row">		
				        <div class="col-sm-3">
				          <div class="well">
				           <p><?php echo $_SESSION['prenom'];?><br />
				           	<?php echo $_SESSION['nom'];?><br />

				           		<?php
						           	$lireD = $publicationsD->fetch();
						           	?>

						           	<?php echo 'Le '. $lireD[0];?><br />

						           	

						           	<?php
						           	$lireL = $publicationsL->fetch();
						           	?>
						           	
						           	<?php echo 'Lieu : '. $lireL[0];?><br />

						           	<?php
						           	$lireH = $publicationsH->fetch();
						           	?>
						           	
						           	<?php echo 'Humeur : '.$lireH[0];?><br />
				           </p>
				 
				          </div>
				        </div>
				        <div class="col-sm-9">
				          <div class="well">


						         	<?php


							/*while(*/$lire = $publications->fetch();//)
							//{
								echo $lire[0];

							//}

								?>
				          </div>
				        </div>
				      </div>

				      <div class="row">		
				        <div class="col-sm-3">
				          <div class="well">
				           <p><?php echo $_SESSION['prenom'];?><br />
				           	<?php echo $_SESSION['nom'];?><br />

				           		<?php
						           	$lireD = $publicationsD->fetch();
						           	?>

						           	<?php echo 'Le '. $lireD[0];?><br />

						           	

						           	<?php
						           	$lireL = $publicationsL->fetch();
						           	?>
						           	
						           	<?php echo 'Lieu : '. $lireL[0];?><br />

						           	<?php
						           	$lireH = $publicationsH->fetch();
						           	?>
						           	
						           	<?php echo 'Humeur : '.$lireH[0];?><br />
				           </p>
				 
				          </div>
				        </div>
				        <div class="col-sm-9">
				          <div class="well">


						         	<?php


							/*while(*/$lire = $publications->fetch();//)
							//{
								echo $lire[0];

							//}

								?>
				          </div>
				        </div>
				      </div>

				      <div class="row">		
				        <div class="col-sm-3">
				          <div class="well">
				           <p><?php echo $_SESSION['prenom'];?><br />
				           	<?php echo $_SESSION['nom'];?><br />

				           		<?php
						           	$lireD = $publicationsD->fetch();
						           	?>

						           	<?php echo 'Le '. $lireD[0];?><br />

						           	

						           	<?php
						           	$lireL = $publicationsL->fetch();
						           	?>
						           	
						           	<?php echo 'Lieu : '. $lireL[0];?><br />

						           	<?php
						           	$lireH = $publicationsH->fetch();
						           	?>
						           	
						           	<?php echo 'Humeur : '.$lireH[0];?><br />
				           </p>
				 
				          </div>
				        </div>
				        <div class="col-sm-9">
				          <div class="well">


						         	<?php


							/*while(*/$lire = $publications->fetch();//)
							//{
								echo $lire[0];

							//}

								?>
				          </div>
				        </div>
				      </div>



				      		<?php
							$bdd = null;
						}
						catch(Exception $e)
						{
							// En cas d'erreur, on affiche un message et on arrête tout
							die('Erreur : '.$e->getMessage());
						}     

          		?>
    
    </div>
    
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Mes Connaissances</p>
        <img src="images/réseau.jpg" alt="Paris" width="400" height="300">
        <br>

        <br>
        <a href="AfficheAmis.php"><button class="btn btn-primary">Réseau</button></a>
      </div>      
    
    </div>
  </div>
</div>
</div>






</body>
</html>