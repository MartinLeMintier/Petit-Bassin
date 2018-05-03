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
					<li><a href="reseau.php"><span class="glyphicon glyphicon-link"></span> Mon Réseau</a></li>

				</ul>

				<!-- Icone pour la Mon Profil -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="Connexion.php"><span class="glyphicon glyphicon-user"></span> Vous</a></li>

				</ul>
			<!-- Icone pour la acceuil -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="AccueilUtilisateur.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>

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


		<a href="upload.html"><button type ='submit'  class ="btn btn-primary bouton"  >Changer photo</button></a>


	</div>




	<!-- On affiche le nom de l'utilisateur -->
	<h1 class="test"><?php echo $_SESSION['prenom']; echo " "; echo $_SESSION['nom']; ?></h1> 
	

<!-- On en a pas besoin de ca 
	<p> <?php echo $_SESSION['mdp']; ?> </p>
	<p> <?php echo $_SESSION['ID']; ?> </p>
	<p> <?php echo $_SESSION['email']; ?> </p>
	<p> <?php echo $_SESSION['PP']; ?> </p>   -->

<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3">
      
      </div>
      
      
    </div>
    <div class="col-sm-7">
    

      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p><?php echo $_SESSION['prenom'];?><br />
           	<?php echo $_SESSION['nom'];?><br />
           </p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
          		<?php  


          				try
		{
			// On se connecte à MySQL
			$bdd2 = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');
			//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//$monom = $bdd->prepare('SELECT * FROM administrateur');
			//$monom->execute(array($adresse_mail, $username));
			
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}     



						$marequete = $bdd2->prepare('SELECT * FROM publication WHERE ID=?)');
          				$marequete->execute(array(2));

          				$mabite = $marequete->fetch();
          				$truc4012 = $mabite['Lieu'];

          				$_SESSION['Lieu'] = $truc4012;  			

     				?><p>
     					<?php echo $_SESSION['Lieu'];?><br />
     				<?php echo $_SESSION['ID'];?><br />
     				<?php echo $_SESSION['PP'];?><br />
					<?php echo $_SESSION['nom'];?><br />		
					<?php echo $_SESSION['mdp'];?><br />
					<?php echo $_SESSION['Lieu'];?><br />
					</p><?php
     			

          		?>

            <div class="panel-body">
              
                   
           
          </div>
          <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
              </button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p><?php echo $_SESSION['prenom'];?><br />
           	<?php echo $_SESSION['nom'];?><br />
           </p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p><?php echo $_SESSION['prenom'];?><br />
           	<?php echo $_SESSION['nom'];?><br />
           </p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p><?php echo $_SESSION['prenom'];?><br />
           	<?php echo $_SESSION['nom'];?><br />
           </p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Mes Connaissances</p>
        <img src="images/réseau.jpg" alt="Paris" width="400" height="300">
        <br>
        <br>
        <button class="btn btn-primary">Amis</button>
        <br>
        <br>
        <button class="btn btn-primary">Réseau</button>
      </div>      
    
    </div>
  </div>
</div>






</body>
</html>