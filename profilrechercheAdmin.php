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

<link rel="stylesheet" href="profilrechercheDesign.css?refresh=0" />


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
        <a class="navbar-brand" href="Admin.php">PloufBook</a>
      </div>

      <!-- Icone pour la deconnexion -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Connexion.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><div class="search-container">
    <form action="recherche.php">
      <input type="text" placeholder="Rechercher..." name="search">
      <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
    </form></li>
        </ul>
    


      </div>

      

      

    </div>
  </nav>
	<header>
		<div id="titre_page">

			<!-- On affiche l'image du profil dans la base de données -->
		<?php 
		echo '<img class="pc" src="images/' . $_SESSION['photodecouvrecherche'] . '">'; 
		?>
		
		</div>

	</header>


	<div>
		
		<!-- On affcihe l'image du profil dans la base de données -->
		<?php $t = $_SESSION['photorecherche']; 

		echo '<img class="pp" src="images/' . $t . '">'; 

		?>


		

	</div>


	

<div class="placer-nom">


	<!-- On affiche le nom de l'utilisateur -->
	<h1 class="test"><?php echo $_SESSION['prenomrecherche']; echo " "; echo $_SESSION['nomrecherche']; ?></h1>

 </div>

  <div class="bouton">
    <a href="uploadRecherche.html"><button type ='submit'  class ="btn btn-primary bouton"  >Changer photo</button></a>    
    <a href="uplad_recherche_pc.html"><button type ='submit'  class ="btn btn-primary bouton"  >Changer Photo de fond</button></a>

   
  </div> 
	

<!-- On en a pas besoin de ca 
	<p> <?php echo $_SESSION['mdp']; ?> </p>
	<p> <?php echo $_SESSION['ID']; ?> </p>
	<p> <?php echo $_SESSION['email']; ?> </p>
	<p> <?php echo $_SESSION['PP']; ?> </p>   -->


<div class ="profilcenter">
<div class="container text-center">    
  <div class="row">
   
      
      
    
    
  </div>
</div>
</div>






</body>
</html>