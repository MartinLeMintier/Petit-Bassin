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
				<a class="navbar-brand" href="#">PloufBook</a>
			</div>

			<!-- Icone pour la deconnexion -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>

				</ul>
			<!-- Icone pour la Notification -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>

				</ul>
			<!-- Icone pour la messagerie -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="	glyphicon glyphicon-envelope"></span> Messagerie</a></li>

				</ul>
			<!-- Icone pour la Mon reseau -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-link"></span> Mon Réseau</a></li>

				</ul>

				<!-- Icone pour la Mon Profil -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-user"></span> Vous</a></li>

				</ul>
			<!-- Icone pour la acceuil -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.html"><span class="glyphicon glyphicon-home"></span> Acceuil</a></li>

				</ul>



			</div>

			
				
			

		</div>
	</nav>

	<header class="header_pageProfil">
		<div id="titre_page">

		
		</div>

	</header>


	<div>
		
		<!-- On affcihe l'image du profil dans la base de données -->
		<?php $t = $_SESSION['PP']; 

		echo '<img class="pp" src="images/' . $t . '">'; 
		?>


		<a href="upload.html"><button type ='submit'  class ="btn btn-primary bouton"  >Changer photo</button>


	</div>




	<!-- On affiche le nom de l'utilisateur -->
	<h1 class="test"><?php echo $_SESSION['prenom']; echo " "; echo $_SESSION['nom']; ?></h1> 
	

<!-- On en a pas besoin de ca 
	<p> <?php echo $_SESSION['mdp']; ?> </p>
	<p> <?php echo $_SESSION['ID']; ?> </p>
	<p> <?php echo $_SESSION['email']; ?> </p>
	<p> <?php echo $_SESSION['PP']; ?> </p>   -->





</body>
</html>