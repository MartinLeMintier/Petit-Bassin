<!DOCTYPE html>
<html>
<head>
<title>PloufBook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="AdminDesign.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="images/logonew.png">
</head>

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
				    <li><div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Recherche</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="Rechercher...">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>	
            </form>
        </div></li>
      
    

					<li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<header class="header_pageAdmin">
		<div id="titre_page">

			<h1>Bienvenue Administrateur</h1>
		</div>

	</header>
<div class="container-fluid">
		<div class=" section1 text-center">
			<div class="container">
			<div class="row main">			
					<div class="panel-heading">
						<div class="panel-title text-center">
							<div class="alert alert-danger">
								<strong>Attention!</strong> l'email entré n'est pas dans la base de donnée
							</div>
							<div class="form-group ">
								<a href="Admin.php"><button type="submit" class="btn btn-primary btn-lg btn-block login-button">Retour page Admin</button></a>
							</div>
	               		<hr />
							
							</div>
					</div> 
				</div>
				</div>
				<div class="col-sm-12">
					<div class="main-login main-center">
					
						<form method="GET" action="suppression.php" class="form-horizontal" method="post" action="#">

							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
										<input type="text" required class="form-control" name="email" id="email"  placeholder="Entrez l'Email"/>
									</div>
								</div>
							</div>
		
							<div class="form-group ">
								<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Supprimer</button>
							</div>

						</form>
					</div>
				
			</div>

		</div>

</div>