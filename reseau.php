<!DOCTYPE html>
<html>
<title>PloufBook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="DesignReseau.css" />
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

      <!-- Icone pour la deconnexion -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Connexion.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Recherche</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="Rechercher...">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>  
            </form>
        </div></li>
        </ul>
      <!-- Icone pour la Notification -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Connexion.php"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>

        </ul>
      <!-- Icone pour la messagerie -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Connexion.php"><span class=" glyphicon glyphicon-envelope"></span> Messagerie</a></li>

        </ul>
      <!-- Icone pour la Mon reseau -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="reseau.php"><span class="glyphicon glyphicon-link"></span> Mon Réseau</a></li>

        </ul>

        <!-- Icone pour la Mon Profil -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Profil.php"><span class="glyphicon glyphicon-user"></span> Vous</a></li>

        </ul>
      <!-- Icone pour la acceuil -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="AccueilUtilisateur.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>

        </ul>



      </div>

      
        
      

    </div>
  </nav>

	<header class="header_pageAdmin">
		<div id="titre_page">

			<h1>Mon Réseau</h1>
		</div>

	</header>
	<div class="container-fluid">
    <div class="Page_Amis">
	<div class="col-sm-12 titre-amis" id="Reseau">

	Mes Amis
	</div>

	<div class="col-sm-3">
	<div class="well">
           Ami1
          </div>
	
	</div>

	<div class="col-sm-3">
	<div class="well">
	Ami2
	</div>
	
	</div>

	<div class="col-sm-3">
	<div class="well">
	Ami3
	</div>
	</div>

	<div class="col-sm-3">
	<div class="well">
	Ami4
	</div>
	</div>

	<div class="col-sm-3">
	<div class="well">
	Ami5
	</div>
	</div>
</div>

<div class="Page_Pro">
	<div class="col-sm-12 titre-pro" id="Pro">

	Mon Réseau Professionnel
	</div>
    <div class="liste">
	<div class="col-sm-3">
	<div class="well">
           collègue1
          </div>
	
	</div>

	<div class="col-sm-3">
	<div class="well">
	Collègue2
	</div>
	
	</div>

	<div class="col-sm-3">
	<div class="well">
	collègue3
	</div>
	</div>

	<div class="col-sm-3">
	<div class="well">
	collègue4
	</div>
	</div>

	<div class="col-sm-3">
	<div class="well">
	collègue5
	</div>
	</div>
</div>

 </div>
 </div>  
	
</body>

</html>