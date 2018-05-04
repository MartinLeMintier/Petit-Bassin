<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title> Les Offres d'emplois du Réseau ECE</title>
</head>

<!-- Tout des details de la bare bleu en haut de la page -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="emplois_design.css?refresh=0" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="images/logonew.png">


</script>


<body class = "boudy">

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
          <li><a href="Connexion.php"><span class=" glyphicon glyphicon-envelope"></span> Messagerie</a></li>

        </ul>

        <!-- Icone pour les emplois -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="emplois.php"><span class=" glyphicon glyphicon-envelope"></span> Emlpois</a></li>

        </ul>


      <!-- Icone pour la Mon reseau -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="reseau.php"><span class="glyphicon glyphicon-link"></span> Mon Réseau</a></li>

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


  <header class="header_pageEmplois">
    <div id="titre_page">

      <h1>Offres d'Emplois</h1>
    </div>

  </header>


<div class ="profilcenter">

  <a href="newemplois.php"><button type ='submit'  class ="btn btn-primary bouton"  >Poster une offre</button></a>

<div class="container text-center">    
  <div class="row">
        <div class="col-sm-7">  



    <?php
    

    try {

      $bdd = new PDO('mysql:host=localhost;dbname=petit_bateau;charset=utf8', 'root', '');

    $emplois = $bdd->query('SELECT Titre FROM `emplois` ORDER BY `IDemploi` DESC');
    $emplois->execute();




?>
      <div class="row">

        <div class="col-sm-9">
          <div class="well">
            <p>
              
                        <?php
                        $lire = $emplois->fetch();
                        ?>
                        
                        <?php echo $lire[0];?><br />

            </p>

            <div class="panel-body">
              
                   
           
          </div>
          <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
              </button>
          </div>
        </div>
      </div>

            <div class="row">

        <div class="col-sm-9">
          <div class="well">
            <p>
              
                        <?php
                        $lire = $emplois->fetch();
                        ?>
                        
                        <?php echo $lire[0];?><br />

            </p>

            <div class="panel-body">
              
                   
           
          </div>
          <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
              </button>
          </div>
        </div>
      </div>

            <div class="row">

        <div class="col-sm-9">
          <div class="well">
            <p>
              
                        <?php
                        $lire = $emplois->fetch();
                        ?>
                        
                        <?php echo $lire[0];?><br />

            </p>

            <div class="panel-body">
              
                   
           
          </div>
          <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
              </button>
          </div>
        </div>
      </div>

            <div class="row">

        <div class="col-sm-9">
          <div class="well">
            <p>
              
                        <?php
                        $lire = $emplois->fetch();
                        ?>
                        
                        <?php echo $lire[0];?><br />

            </p>

            <div class="panel-body">
              
                   
           
          </div>
          <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
              </button>
          </div>
        </div>
      </div>

            <div class="row">

        <div class="col-sm-9">
          <div class="well">
            <p>
              
                        <?php
                        $lire = $emplois->fetch();
                        ?>
                        
                        <?php echo $lire[0];?><br />

            </p>

            <div class="panel-body">
              
                   
           
          </div>
          <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
              </button>
          </div>
        </div>
      </div>

            <div class="row">

        <div class="col-sm-9">
          <div class="well">
            <p>
              
                        <?php
                        $lire = $emplois->fetch();
                        ?>
                        
                        <?php echo $lire[0];?><br />

            </p>

            <div class="panel-body">
              
                   
           
          </div>
          <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Aimer
              </button>
          </div>
        </div>
      </div>

      <?php



      
    } catch (Exception $e) {
      
    }



    ?>





  



    
    </div>

    </div>

  </div>
</div>
	

</body>
</html>