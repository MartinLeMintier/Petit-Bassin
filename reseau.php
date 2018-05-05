<?php

session_start();

?>

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
        <a class="navbar-brand" href="AccueilUtilisateur.php">PloufBook</a>
      </div>

      <!-- Icone pour la deconnexion -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="deconnexion.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Rechercher..." name="search">
      <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
    </form></li>
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
          <li><a href="AfficheAmis.php"><span class="glyphicon glyphicon-link"></span> Mon Réseau</a></li>

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
	<div id="myDiv1">
		</div>
     
     	<!--<script>
     	

	    var nb= '<?php echo $_SESSION['NbAmis'];?>';
	    var nb2= '<?php echo $_SESSION['monami1'];?>';
	    var nb3= '<?php echo $_SESSION['monami2'];?>';
		
	    document.getElementById('myDiv1').innerHTML += '<p> '+ nb +'</p>';

		//for (var i=0;i<nb;i++)
		//	 var j='<?php //echo $_SESSION['monami']?>[i]<?php;?>';
		document.getElementById('myDiv1').innerHTML += '<p> '+ nb2 +'</p>';
		document.getElementById('myDiv1').innerHTML += '<p> '+ nb3 +'</p>';
		
		
			
		</script>-->
		<script>
     	
	    var nom1= '<?php echo $_SESSION['monami1'];?>';
	    var pp1 = '<?php echo $_SESSION['photopp1'];?>';
	    var pre1 = '<?php echo $_SESSION['prenomami1'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp1 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom1 + ' ' + pre1 + ' </strong></div></div>';
		</script>
		<script >

		var nom2= '<?php echo $_SESSION['monami2'];?>';
	    var pp2 = '<?php echo $_SESSION['photopp2'];?>';
	    var pre2 = '<?php echo $_SESSION['prenomami2'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp2 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom2 + ' ' + pre2 + ' </strong></div></div>';
</script>
<script>
		var nom3= '<?php echo $_SESSION['monami3'];?>';
	    var pp3 = '<?php echo $_SESSION['photopp3'];?>';
	    var pre3 = '<?php echo $_SESSION['prenomami3'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp3 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom3 + ' ' + pre3 + ' </strong></div></div>';
		</script>

		<script>

		var nom4= '<?php echo $_SESSION['monami4'];?>';
	    var pp4 = '<?php echo $_SESSION['photopp4'];?>';
	    var pre4 = '<?php echo $_SESSION['prenomami4'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp4 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom4 + ' ' + pre4 + ' </strong></div></div>';
		</script>
		
		<script>

		var nom5= '<?php echo $_SESSION['monami5'];?>';
	    var pp5 = '<?php echo $_SESSION['photopp5'];?>';
	    var pre5 = '<?php echo $_SESSION['prenomami5'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp5 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom5 + ' ' + pre5 + ' </strong></div></div>';
		</script>
		
		<script>

		var nom6= '<?php echo $_SESSION['monami6'];?>';
	    var pp6 = '<?php echo $_SESSION['photopp6'];?>';
	    var pre6 = '<?php echo $_SESSION['prenomami6'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp6 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom6 + ' ' + pre6 + ' </strong></div></div>';
		</script>

		<script>

		var nom7= '<?php echo $_SESSION['monami7'];?>';
	    var pp7 = '<?php echo $_SESSION['photopp7'];?>';
	    var pre7 = '<?php echo $_SESSION['prenomami7'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp7 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom7 + ' ' + pre7 + ' </strong></div></div>';
		</script>
		
		<script>

		var nom8= '<?php echo $_SESSION['monami8'];?>';
	    var pp8 = '<?php echo $_SESSION['photopp8'];?>';
	    var pre8 = '<?php echo $_SESSION['prenomami8'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp8 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom8 + ' ' + pre8 + ' </strong></div></div>';
		</script>

		<script>

		var nom9= '<?php echo $_SESSION['monami9'];?>';
	    var pp9 = '<?php echo $_SESSION['photopp9'];?>';
	    var pre9 = '<?php echo $_SESSION['prenomami9'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp9 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom9 + ' ' + pre9 + ' </strong></div></div>';
		</script>

		<script>

		var nom10= '<?php echo $_SESSION['monami10'];?>';
	    var pp10 = '<?php echo $_SESSION['photopp10'];?>';
	    var pre9 = '<?php echo $_SESSION['prenomami10'];?>';
		document.getElementById('myDiv1').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + pp10 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nom10 + ' ' + pre10 + ' </strong></div></div>';
		</script>
			
		

		</div>
		</div>


<div class="container-fluid">
    <div class="reseau_pro">

<div class="Page_Pro">
	<div class="col-sm-12 titre-pro" id="Pro">

	Mon Réseau Professionnel
	</div>

	<div id="myDiv2">
	

	</div>


	<script>
     	
	    var nomC1= '<?php echo $_SESSION['moncollegue1'];?>';
	    var ppC1 = '<?php echo $_SESSION['photoCpp1'];?>';
	   
	    var preC1 = '<?php echo $_SESSION['prenomcollegue1'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC1 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC1 + ' ' + preC1 + ' </strong></div></div>';
		
		</script>
		<script>
     	
	    var nomC2= '<?php echo $_SESSION['moncollegue2'];?>';
	    var ppC2 = '<?php echo $_SESSION['photoCpp2'];?>';
	    var preC2 = '<?php echo $_SESSION['prenomcollegue2'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC2 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC2 + ' ' + preC2 + ' </strong></div></div>';
		</script>
<script>
     	
	    var nomC3= '<?php echo $_SESSION['moncollegue3'];?>';
	    var ppC3 = '<?php echo $_SESSION['photoCpp3'];?>';
	    var preC3 = '<?php echo $_SESSION['prenomcollegue3'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC3 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC3 + ' ' + preC3 + ' </strong></div></div>';
		</script>

		<script>
     	
	    var nomC4= '<?php echo $_SESSION['moncollegue4'];?>';
	    var ppC4 = '<?php echo $_SESSION['photoCpp4'];?>';
	    var preC4 = '<?php echo $_SESSION['prenomcollegue4'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC4 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC4 + ' ' + preC4 + ' </strong></div></div>';
		</script>
		
		<script>
     	
	    var nomC5= '<?php echo $_SESSION['moncollegue5'];?>';
	    var ppC5 = '<?php echo $_SESSION['photoCpp5'];?>';
	    var preC5 = '<?php echo $_SESSION['prenomcollegue5'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC5 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC5 + ' ' + preC5 + ' </strong></div></div>';
		</script>
		
		<script>
     	
	    var nomC6= '<?php echo $_SESSION['moncollegue6'];?>';
	    var ppC6 = '<?php echo $_SESSION['photoCpp6'];?>';
	    var preC6 = '<?php echo $_SESSION['prenomcollegue6'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC6 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC6 + ' ' + preC6 + ' </strong></div></div>';
		</script>

		<script>
     	
	    var nomC7= '<?php echo $_SESSION['moncollegue7'];?>';
	    var ppC7 = '<?php echo $_SESSION['photoCpp7'];?>';
	    var preC7 = '<?php echo $_SESSION['prenomcollegue7'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC7 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC7 + ' ' + preC7 + ' </strong></div></div>';
		</script>
		
		<script>
     	
	    var nomC8= '<?php echo $_SESSION['moncollegue8'];?>';
	    var ppC8 = '<?php echo $_SESSION['photoCpp8'];?>';
	    var preC8 = '<?php echo $_SESSION['prenomcollegue8'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC8 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC8 + ' ' + preC8 + ' </strong></div></div>';
		</script>

		<script>
     	
	    var nomC9= '<?php echo $_SESSION['moncollegue9'];?>';
	    var ppC9 = '<?php echo $_SESSION['photoCpp9'];?>';
	    var preC9 = '<?php echo $_SESSION['prenomcollegue9'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC9 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC9 + ' ' + preC9 + ' </strong></div></div>';
		</script>

		<script>
     	
	    var nomC10= '<?php echo $_SESSION['moncollegue10'];?>';
	    var ppC10 = '<?php echo $_SESSION['photoCpp10'];?>';
	    var preC10 = '<?php echo $_SESSION['prenomcollegue10'];?>';
		document.getElementById('myDiv2').innerHTML += '<div class="col-sm-3"><div class="well"><img class="img-circle" src="images/' + ppC10 + '" height="65" width="65" alt="Avatar"> <strong>   '+ nomC10 + ' ' + preC10 + ' </strong></div></div>';

		</script>

<div id="MyDiv2">
	

	</div>

  <!-- <div class="liste">
   
	<div class="col-sm-3">
	<div class="well">
           
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

 </div>-->
 </div> 
 </div> 
	</div>
</body>



</html>