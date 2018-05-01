<?php

session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Page Profil</title>
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="ProfilDesign.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="images/logonew.png">


</script>


<body>


	<!-- Navbar -->
	<nav role="navigation" class="navbar navbar-reverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="images/logonew.png" class="logo" alt="" />
				<a class="navbar-brand" href="#">PloufBook</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-log-out"></span> Notifications</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-log-out"></span> Messagerie</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-log-out"></span> Mon Réseau</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-log-out"></span> Acceuil</a></li>

				</ul>



			</div>

			
				
			

		</div>
	</nav>

	<header class="header_pageProfil">
		<div id="titre_page">

		
		</div>

	</header>


	<div>
		
		<img   src = "images/PP.jpg" class = "img-responsive PP" alt = "PP"/>

	</div>



	<p> <?php echo $_SESSION['email']; ?> </p>




</body>
</html>